<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\game;

/**
 * Class BlogController
 * @package App\Http\Controllers
 */

class BlogController extends Controller
{
    public function blogs()
    {
        $posts = Post::all();

        return view('blog',['posts'=>$posts]);
    }

    public function show(game $game, Post $post)
    {

        $gamewithposts = Post::where('game_id', $game->id)->get();
        return view('single',['gamewithposts'=>$gamewithposts]);

    }

    public function view($id)
    {
        $post = Post::find($id);

        return view('blog-show', ['post'=>$post]);
    }

}
