@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">Categories</h4>


                <div class="table-responsive" id="category">

                    <div style="display: flex">
                        <a href="{{ route('admin-categories-create') }}">
                            <input type="button" value="Add New Category" class="btn btn-primary text-white me-0" style="background-color: #303030; color: burlywood;"/>
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
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('admin-categories-edit', $category->id) }}"><i
                                            class="mdi mdi-lead-pencil"></i></a>
                                    <a href="{{ route('admin-categories-delete', $category->id) }}"><i
                                            class="mdi mdi-delete"></i></a>
                                    <a href="{{ route('admin-categories-show', $category->id) }}"><i
                                            class="mdi mdi-eye"></i></a>
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
