<?php

namespace App\Http\Controllers;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
}
