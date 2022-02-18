@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; font-size: large"><b>Comment Id: {{ $comment->id }}</b></h4>
                <p>Comment By: <br>{{ $comment->comment_by_id }}</p><br>
                <p>Comment On Type:<br> {{ $comment->type }}</p><br>
                <p>Comment Text:<br> {!! $comment->text !!}</p><br>

            </div>
        </div>

@endsection

