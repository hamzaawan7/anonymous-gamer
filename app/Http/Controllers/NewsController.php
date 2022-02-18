<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\game;
use App\Models\User;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */

class NewsController extends Controller
{
    public function news()
    {
        $posts = Post::all();

        return view('news',['posts'=>$posts]);
    }

    public function show(Game $game, Post $post)
    {

        $gamewithposts = Post::where('game_id', $game->id)->get();

        return view('single',['gamewithposts'=>$gamewithposts]);

    }

    public function view($id)
    {

        $post = Post::find($id);

        return view('blog-show', (['post']) );
    }

}
