@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">Comments</h4>
                @if(session('success'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('success') }}

                    </div>
                @endif


                <div class="table-responsive" id="comment">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Type</th>
                            <th>Comment</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{ $comment->type }}</td>
                                <td>{{Str::limit($comment->text, 100)}}</td>
                                <td>
                                    <a href="{{ route('admin-comments-delete', $comment->id) }}"><i
                                            class="mdi mdi-delete text-black"></i></a>
                                    <a href="{{ route('admin-comments-show', $comment->id) }}"><i
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
