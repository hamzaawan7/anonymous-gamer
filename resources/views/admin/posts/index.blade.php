@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">Posts</h4>


                <div class="table-responsive" id="category">

                    <div style="display: flex">
                        <a href="{{ route('admin-posts-create') }}">
                            <input type="button" value="Add New Post" class="btn btn-primary text-white me-0" style="background-color: #303030; color: burlywood;"/>
                        </a>&nbsp;

                    </div>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{ route('admin-posts-edit', $post->id) }}"><i
                                            class="mdi mdi-lead-pencil"></i></a>
                                    <a href="{{ route('admin-posts-delete', $post->id) }}"><i
                                            class="mdi mdi-delete"></i></a>
                                    <a href="{{ route('admin-posts-show', $post->id) }}"><i
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
