@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Review Detail</h4>
                <p class="card-description">Details of Selected Review</p>
                <ul class="list-arrow">

                    <li>Review id :                {{ $review->id}}</li>
                    <li>Post id :              {{ $review->post_id }}</li>
                    <li>Review Rating:              {{ $review->rating }}</li>
                    <li>Review Comment:              {{ $review->Comment }}</li>
                    <li>Reviewer Name:      {{ $review->name }}</li>
                    <li>Reviewer Email:              {{ $review->email }}</li>
                    <li>Review Creation Date:      {{ $review->created_at }}</li>
                    <li>Review Updated At:      {{ $review->updated_at }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
