<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::all();

        return view('welcome',['posts'=>$posts]);


    }

    public function __construct()
    {
//        $this->middleware('verified');
    }

    public function myNotification($type)
    {
        switch ($type) {
            case 'message':
                alert()->message('Sweet Alert with message.');
                break;
            case 'basic':
                alert()->basic('Sweet Alert with basic.','Basic');
                break;
            case 'info':
                alert()->info('Sweet Alert with info.');
                break;
            case 'success':
                alert()->success('Sweet Alert with success.','Welcome to ItSolutionStuff.com')->autoclose(3500);
                break;
            case 'error':
                alert()->error('Sweet Alert with error.');
                break;
            case 'warning':
                alert()->warning('Sweet Alert with warning.');
                break;
            default:
                # code...
                break;
        }


        return view('my-notification');
    }
}
