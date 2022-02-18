<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

/**
 * Class PostsController
 * @package App\Http\Controllers\Admin
 */

class PostsController extends Controller
{

    public function blogindex()
    {
        $posts = Post::where('type_id', '1')->get();


        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function newsindex()
    {
        $posts = Post::where('type_id', '2')->get();

        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $games = game::all();

        return view('admin.posts.create', ['games' => $games]);
    }

    public function store(Request $request)
    {


        $request->validate([
//            'type' => 'required',
//            'game_id' => 'required',
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
            'type_id' => request('type_id'),
            'game_id' => request('game_id'),
            'title' => request('title'),
            'images' => $newImageName,
            'tags' => implode(request('tags')),
            'summary' => request('summary'),
            'description' => request('description'),
        ]);
        return redirect()->route('admin-posts-blogs-index');
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
        $post->game_id = $request->get('game_id');
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

        return redirect()->route('admin-posts-blogs-index');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', ['post' => $post]);
    }

    public function delete($id)
    {
        Post::where('id', $id)->firstorfail()->delete();

        return redirect()->back()->with('success', 'Data has been Deleted Successfully');
    }
}
