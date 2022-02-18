<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;

/**
 * Class NewsController
 * @package App\Http\Controllers\Admin
 */

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', ['news' => $news]);
    }
}
