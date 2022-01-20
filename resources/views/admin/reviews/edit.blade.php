@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Selected Review</h4>

                <form class="forms-sample" method="post" action="{{ route('admin-reviews-update') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $review->id }}"/>

                    <div class="form-group">

                        <div class="form-group">

                            <input type="text" name="post_id" id="post_id" class="form-control" value="{{ $review->post_id }}" hidden>
                        </div>
                        <div class="form-group">
                            <label>Rating</label>
                            <input type="text" name="rating" id="rating" class="form-control" value="{{ $review->rating }}">
                        </div>

                        <div class="form-group">
                            <label>Comment</label>
                            <textarea class="form-control" id="comment" name="comment" rows="20">{{ $review->Comment }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $review->name }}" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $review->email }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary text-white me-0" style="background-color: #A9A9A9; color: burlywood;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
