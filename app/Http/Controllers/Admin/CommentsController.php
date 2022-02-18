<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Class CommentsController
 * @package App\Http\Controllers\Admin
 */

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('admin.comments.index', ['comments' => $comments]);
    }
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'text' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        Comment::create([

            'text' => request('text'),
            'post_id' => request('post_id'),
            'type_id' => request('type_id'),
        ]);

        return view('welcome');
    }


    public function edit($id)
    {
        $comment = Comment::find($id);

        return view('admin.comments.edit', ['comment' => $comment]);
    }

    public function show($id)
    {
        $comment = Comment::find($id);

        return view('admin.comments.show', ['comment' => $comment]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $comment = Comment::find($request->get('id'));

        $comment->type = $request->get('type');
        $comment->type_id = $request->get('type_id');
        $comment->parent_id = $request->get('parent_id');
        $comment->text = $request->get('text');
        $comment->comment_by_id = $request->get('comment_by_id');

        $comment->save();

        return redirect()->route('admin-comments-index');
    }

    public function delete($id)
    {
        Comment::where('id', $id)->firstorfail()->delete();

        return redirect()->back()->with('success', 'Data has been Deleted Successfully');
    }
}
