@extends('layouts.userdashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')
    @foreach ($gamesWithRequirements as $gamesWithRequirement)

        <h1>{{ $gamesWithRequirement->name }}</h1>

    @endforeach

@endsection
