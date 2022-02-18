<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\game;
use App\Models\User;

/**
 * Class E3Controller
 * @package App\Http\Controllers
 */

class E3Controller extends Controller
{
    public function e3()
    {
        $posts = Post::all();

        return view('e3',['posts'=>$posts]);
    }

    public function show(game $game, Post $post)
    {
        $gameWithPosts = Post::where('game_id', $game->id)->get();

        return view('single',['gamewithposts'=>$gameWithPosts]);
    }

    public function view($id)
    {

        $post = Post::find($id);
        $usersWithPosts = User::select('*')->leftJoin('posts', 'users.id', '=', 'posts.users_id')->get();

        return view('blog-show', compact(['post','usersWithPosts']) );
    }
}
