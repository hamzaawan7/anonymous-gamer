<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

use App\Models\game;

/**
 * Class GamesController
 * @package App\Http\Controllers\Admin
 */

class GamesController extends Controller
{
    public function index()
    {
        $games = game::all();

        return view('admin.games.index', ['games' => $games]);
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg',
            'name' => 'required'
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload/game'), $newImageName);

        $games = game::create([
            'image' => $newImageName,
            'name' => $request->input('name')
        ]);

        $request->session()->flash('alert-success', 'User was successful added!');

        return view('admin.games.create', ['games' => $games]);

    }

    public function edit($id)
    {
        $game = game::find($id);

        return view('admin.games.edit', ['game' => $game]);
    }

    public function update(Request $request)
    {
        $request->get('old_image');

        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpg,png,jpeg',
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $game = game::find($request->get('id'));

        if (File::exists(public_path('images/upload/game/' . $game->image))) {
            File::delete(public_path('images/upload/game/' . $game->image));
        }
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images/upload/game'), $newImageName);


        $game->image = $newImageName;
        $game->name = $request->get('name');


        $game->save();

        return redirect()->route('admin-games-index');
    }

    public function show($id)
    {
        $game = game::find($id);

        return view('admin.games.show', ['game' => $game]);
    }

    public function delete($id)
    {
        game::where('id', $id)->firstorfail()->delete();

        return redirect()->back()->with('success', 'Data has been Deleted Successfully');
    }
}
