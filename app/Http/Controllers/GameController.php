<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use http\Env\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('category',['categories'=>$categories] );
    }


}
