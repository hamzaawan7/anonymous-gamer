<?php

namespace App\Http\Controllers;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */

class ReviewController extends Controller
{
    public function reviews()
    {
        return view('review');
    }
}
