<?php

namespace App\Http\Controllers;

use App\Models\GameRequirement;
use App\Models\Game;

/**
 * Class GameRequirementsController
 * @package App\Http\Controllers
 */

class GameRequirementsController extends Controller
{
    public function games_requirement()
    {
        $games = Game::all();
        return view('requirement',['games'=>$games] );
    }

    public function show()
    {

        $gamesWithRequirements = GameRequirement::select(['games.id as game_id', 'games.name as name'])->leftJoin('games', 'games.id', '=', 'game_req.game_id')->get();

        return view('requirement-show', ['gamesWithRequirements' => $gamesWithRequirements]);
    }
}
