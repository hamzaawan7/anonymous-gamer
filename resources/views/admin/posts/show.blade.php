@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; font-size: large"><b>Post Title:              {{ $post->title }}</b></h4>


                <div><img src="{{ url('images/upload/post/'.$post->images) }}" alt="" title="" height="250" width="250" style="display: block; margin-left: auto; margin-right: auto;"/></div>
                <p>{{ $post->summary }}</p>
                <p>{!! $post->description !!}</p>

        </div>
    </div>


@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description')
    </script>
@endsection
