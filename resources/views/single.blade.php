@extends('layouts.userdashboard')
@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <section class="section first-section" style="padding-top: 10px">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                @foreach($gamewithposts as $gamewithpost)
                    <div class="left-side">
                        <div class="masonry-box post-media">
                            <img src="{{asset('images/upload/post/'.$gamewithpost->images)}}" alt="" class="img-fluid">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-aqua"><a href="#" title="">{{$gamewithpost->title}}</a></span>
                                    <h4><a href="{{ url('blogs/view/'.$gamewithpost->id) }}" title="">{{$gamewithpost->summary}}</a></h4>
                                    <small><a href="{{ url('blogs/view/'.$gamewithpost->id) }}" title="">{{$gamewithpost->created_at}}</a></small>
                                    <small><a href="#" title="">{{ $gamewithpost->name  }}</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
