<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {


        $request->validate([
//            'category_id' => 'required',
            'title' => 'required',
            'images' => 'required|mimes:jpg,png,jpeg',
            'tags' => 'required',
            'summary' => 'required',
            'description' => 'required'
        ]);
        $newImageName = time() . '-' . $request->name . '.' . $request->images->extension();
        $request->images->move(public_path('images/upload/post'), $newImageName);

            Post::create([
                'users_id' => $request = auth()->user()->id,
                'category_id' => request('category_id'),
                'title' => request('title'),
                'images' => $newImageName,
                'tags' => implode(request('tags')),
                'summary' => request('summary'),
                'description' => request('description'),
            ]);
        return redirect()->route('admin-posts-index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function update(Request $request)
    {
        $request->get('old_image');

        $validator = Validator::make($request->all(), [
            'title' => 'required',
//            'images' => 'required|mimes:jpg,png,jpeg',
            'tags' => 'required',
            'summary' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $post = Post::find($request->get('id'));
        $post->category_id = $request->get('category_id');
        $post->users_id = $request->get('users_id');
        $post->title = $request->get('title');
        if (File::exists(public_path('images/upload/post/' . $post->images))) {
            File::delete(public_path('images/upload/post/' . $post->images));
        }

        $newImageName = time() . '-' . $request->name . '.' . $request['image']->extension();
        $request['image']->move(public_path('images/upload/post'), $newImageName);
        $post->images = $newImageName;
        $post->tags = $request->get('tags');
        $post->summary = $request->get('summary');
        $post->description = $request->get('description');

        $post->save();

        return redirect()->route('admin-posts-index');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', ['post' => $post]);
    }

    public function delete($id)
    {
        Post::where('id', $id)->firstorfail()->delete();

        return redirect('/admin/post');
    }
}
