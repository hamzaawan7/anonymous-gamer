@extends('layouts.userdashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')
                <section class="section first-section" style="padding-top: 10px">
                    <div class="container-fluid">
                        <div class="masonry-blog clearfix">
                            @foreach($categories as $category)
                                    <div class="left-side">
                                        <div class="masonry-box post-media">
                                            <img src="images\upload\category\{{$category->image}}" alt="" class="img-fluid">
                                            <div class="shadow-desc">
                                                <div class="blog-meta">
                                                    <h4><a href="{{url('/blogs/show/'.$category->id)}}" title="">{{$category->name}}</a></h4>
                                                    <small><a href="{{url('/blogs/show/'.$category->id)}}" title="">{{$category->created_at}}</a></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </section>

@endsection
