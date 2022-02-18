@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; font-size: large"><b>Game Title:              {{ $game->name }}</b></h4>


                <div><img src="{{ asset('images/upload/game/'.$game->image) }}" alt="" title="" height="250" width="250" style="display: block; margin-left: auto; margin-right: auto;"/></div>
                <p style="text-align: center;">game id :                {{ $game->id}}</p>
            </div>
        </div>

@endsection
