<?php

namespace App\Http\Controllers;

use App\Models\Game;

/**
 * Class GameController
 * @package App\Http\Controllers
 */

class GameController extends Controller
{
    public function games()
    {
        $games = Game::all();
        return view('game',['games'=>$games] );
    }



}
