@extends('layouts.app')

@section('title')
    Anonymous Gamer
@endsection

@section('content')
    <h2 class="ex1">Reviews Details</h2>

    <div id="students" class="tabContent">
        <div style="display: flex">
            <a href="{{ route('admin') }}">
                <input type="button" value="Back" class="button_tj1" style="float: right">
            </a>
        </div>

        <table class="center" id="table_tj">
            <tr>
                <th>ID</th>
                <th>Post_ID</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Created Date</th>
                <th>Update Date</th>
                <th>Action</th>
            </tr>

            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->post_id }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->Comment }}</td>
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->email }}</td>
                    <td>{{ $review->created_at }}</td>
                    <td>{{ $review->updated_at }}</td>
                    <td>
                        <a href="{{ route('review-edit', $review->id) }}">Edit</a>
                        <a href="{{ route('review-delete', $review->id) }}">Delete</a>
                        <a href="{{ route('review-show', $review->id) }}">Show</a>
                    </td>
                </tr>
            @endforeach

            <br>
            <br>
        </table>
    </div>
@endsection
