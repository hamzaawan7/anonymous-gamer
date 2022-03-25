<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Null_;

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
        $comment = new Comment;
        $comment->text = $request->text;
        $comment->post_id = $request->post_id;
        $comment->type_id = $request->type_id;
        $comment->save();

        return response()->json(
            [
                'status' => 200,
                'message' => 'Data Inserted Successfully',
            ]
        );
    }

    public function reply_create(Request $request)
    {
//        $validator = Validator::make($request->all(),[
//            'text' => 'required|max:255',
//        ]);
//
//        if ($validator->fails()) {
//            return redirect()->back()->withErrors($validator->errors());
//        }
        $comment = new Comment;
        $comment->text = $request->text;
        $comment->post_id = $request->post_id;
        $comment->type_id = $request->type_id;
        $comment->parent_id = $request->parent_id;
        $comment->save();

        return response()->json(
            [
                'status' => 200,
                'message' => 'Data Inserted Successfully',
            ]
        );
    }

    public function view(Request $request)
    {
        $data = Comment::where('post_id', $request->id)->
        where('parent_id', null)->get();
        return response()->json([
            'data'=>$data,
        ]);
    }
    public function display(Request $request)
    {

        $data = Comment::where('parent_id', $request->parent_id)->get();

        return response()->json([
            'data'=>$data,
        ]);
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
