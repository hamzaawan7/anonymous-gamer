@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center">Reviews</h4>


                <div class="table-responsive" id="category">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Review ID</th>
                            <th>Post_ID</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reviews as $review)
                            <tr>
                                <td>{{ $review->id }}</td>
                                <td>{{ $review->post_id }}</td>
                                <td>{{ $review->rating }}</td>

                                <td>
                                    <a href="{{ route('admin-reviews-edit', $review->id) }}"><i
                                            class="mdi mdi-lead-pencil text-black"></i></a>
                                    <a href="{{ route('admin-reviews-delete', $review->id) }}"><i
                                            class="mdi mdi-delete text-black"></i></a>
                                    <a href="{{ route('admin-reviews-show', $review->id) }}"><i
                                            class="mdi mdi-eye text-black"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
@endsection
