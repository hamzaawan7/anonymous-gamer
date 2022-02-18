@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">Games</h4>
                @if(session('success'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('success') }}

                    </div>
                @endif


                <div class="table-responsive" id="game">

                    <div style="display: flex">
                        <a href="{{ route('admin-games-create') }}">
                            <input type="button" value="Add New Game" class="btn btn-primary text-white me-0"
                                   style="background-color: #303030; color: burlywood;"/>
                        </a>&nbsp; &nbsp;

                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($games as $game)
                            <tr>
                                <td>{{ $game->name }}</td>
                                <td>
                                    <a href="{{ route('admin-games-edit', $game->id) }}"><i
                                            class="mdi mdi-lead-pencil text-black"></i></a>
                                    <a href="{{ route('admin-games-delete', $game->id) }}"><i
                                            class="mdi mdi-delete text-black"></i></a>
                                    <a href="{{ route('admin-games-show', $game->id) }}"><i
                                            class="mdi mdi-eye text-black"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
