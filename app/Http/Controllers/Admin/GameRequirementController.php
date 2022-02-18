<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;
use App\Models\GameRequirement;
use Illuminate\Support\Facades\Validator;

/**
 * Class GameRequirementController
 * @package App\Http\Controllers\Admin
 */

class GameRequirementController extends Controller
{
    public function index()
    {
        $game_requirements = GameRequirement::get()->unique('game_id');
        return view('admin.gamerequirement.index', ['game_requirements' => $game_requirements]);
    }

    public function create()
    {
        $games = game::all();


        return view('admin.gamerequirement.create', ['games' => $games]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'min_cpu' => 'required',
            'min_ram' => 'required',
            'min_gpu' => 'required',
            'min_dx' => 'required',
            'min_os' => 'required',
            'min_sto' => 'required',
            'min_sound' => 'required',
            'max_cpu' => 'required',
            'max_ram' => 'required',
            'max_gpu' => 'required',
            'max_dx' => 'required',
            'max_os' => 'required',
            'max_sto' => 'required',
            'max_sound' => 'required',
        ]);

        $min = new GameRequirement;
        if (GameRequirement::where('game_id', $request->game_id)->exists()) {
            return back()->with('error', 'Game name is already have values!');
        } else {
            $min->game_id = $request->game_id;
            $min->type = 1;
            $min->cpu = $request->min_cpu;
            $min->ram = $request->min_ram;
            $min->gpu = $request->min_gpu;
            $min->dx = $request->min_dx;
            $min->os = $request->min_os;
            $min->sto = $request->min_sto;
            $min->sound = $request->min_sound;

            $min->save();

            $max = new GameRequirement;
            $max->game_id = $request->game_id;
            $max->type = 2;
            $max->cpu = $request->max_cpu;
            $max->ram = $request->max_ram;
            $max->gpu = $request->max_gpu;
            $max->dx = $request->max_dx;
            $max->os = $request->max_os;
            $max->sto = $request->max_sto;
            $max->sound = $request->max_sound;

            $max->save();
        }
        return redirect()->route('admin-games_required-index');
    }

    public function edit($game_id)
    {
        $gamesWithRequirements = GameRequirement::leftJoin('games', 'games.id', '=', 'game_req.game_id')->where('game_id', $game_id)->get();

        return view('admin.game-requirement.edit', ['gamesWithRequirements' => $gamesWithRequirements]);
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'min_cpu' => 'required',
            'min_ram' => 'required',
            'min_gpu' => 'required',
            'min_dx' => 'required',
            'min_os' => 'required',
            'min_sto' => 'required',
            'min_sound' => 'required',
            'max_cpu' => 'required',
            'max_ram' => 'required',
            'max_gpu' => 'required',
            'max_dx' => 'required',
            'max_os' => 'required',
            'max_sto' => 'required',
            'max_sound' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        GameRequirement::where('game_id', $request->game_id)
            ->where('type', 1)
            ->update([
                'cpu' => $request->min_cpu,
                'ram' => $request->min_ram,
                'gpu' => $request->min_gpu,
                'dx' => $request->min_dx,
                'os' => $request->min_os,
                'sto' => $request->min_sto,
                'sound' => $request->min_sound,
            ]);

        GameRequirement::where('game_id', $request->game_id)
            ->where('type', 2)
            ->update([
                'cpu' => $request->max_cpu,
                'ram' => $request->max_ram,
                'gpu' => $request->max_gpu,
                'dx' => $request->max_dx,
                'os' => $request->max_os,
                'sto' => $request->max_sto,
                'sound' => $request->max_sound,
            ]);

        return redirect()->route('admin-games_required-index');
    }

    public function show($game_id)
    {
        $gamesWithRequirements = GameRequirement::where('game_id', $game_id)->get();
        return view('admin.gamerequirement.show', ['gamesWithRequirements' => $gamesWithRequirements]);
    }

    public function delete($game_id)
    {
        GameRequirement::where('game_id', $game_id)->delete();

        return redirect()->back()->with('success', 'Data has been Deleted Successfully');
    }
}
