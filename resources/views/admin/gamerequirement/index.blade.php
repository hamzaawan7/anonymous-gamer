@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">Games Requirements</h4>


                <div class="table-responsive" id="category">

                    <div style="display: flex">
                        <a href="{{ route('admin-games_required-create') }}">
                            <input type="button" value="Add New Game Req" class="btn btn-primary text-white me-0" style="background-color: #303030; color: burlywood;"/>
                        </a>&nbsp; &nbsp;

                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Game Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($categoriesWithRequirements as $categoriesWithRequirement)
                            <tr>
                                <td>{{ $categoriesWithRequirement->name }}</td>
                                <td>
                                    <a href="{{ route('admin-games_required-edit', $categoriesWithRequirement->category_id) }}"><i
                                            class="mdi mdi-lead-pencil text-black"></i></a>
                                    <a href="{{ route('admin-games_required-delete', $categoriesWithRequirement->category_id) }}"><i
                                            class="mdi mdi-delete text-black"></i></a>
                                    <a href="{{ route('admin-games_required-show', $categoriesWithRequirement->category_id) }}"><i
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
