<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function new_post()
    {

        return view('new_post');
    }

    public function process_post(Request $request)
    {


        $request->validate([

            'users_id' => 'required',
            'category_id' => 'required',
            'title' => 'required',
            'images' => 'required|mimes:jpg,png,jpeg',
            'summary' => 'required',
            'description' => 'required'
        ]);

        $newImageName = time() . '-' . $request->name . '.' .
            $request->images->extension();
        $request->images->move(public_path('images'), $newImageName);


        $post = Post::create([
            'users_id' => $request->input('users_id'),
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'images' => $newImageName,
            'summary' => $request->input('name'),
            'description' => $request->input('name')
        ]);
        return view('new_post');

    }
}
