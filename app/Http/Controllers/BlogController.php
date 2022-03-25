<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
        $comments = Comment::all();

        return view('blog',['posts'=>$posts, 'comments'=>$comments]);
    }

    public function show(game $game, Post $post)
    {

        $gamewithposts = Post::where('game_id', $game->id)->get();
        return view('single',['gamewithposts'=>$gamewithposts]);

    }

    public function view($id)
    {
        $post = Post::find($id);
        $comments = Comment::all();

        return view('blog-show', ['post'=>$post, 'comments'=>$comments]);
    }

}
