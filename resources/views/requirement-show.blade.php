@extends('layouts.uidashboard2')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div class="page-title wb" style="padding-top: 2%; padding-bottom: 2%">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('blogs')}}">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="section wb" style="padding-top: 2%">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">


                            <h3>{{$post->summary}}</h3>

                            <div class="blog-meta big-meta">
                                <small><a href="#" title="">{{$post->created_at}}</a></small>
                                <small><a href="#" title="">M Talha Javed</a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                            </div>

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                            <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                            <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-post-media">
                            <img src="{{asset('images/upload/post/'.$post->images)}}" alt="" class="img-fluid">
                        </div>
                        <div class="blog-content">
                            <div class="pp" style="text-align: justify">
                                <h3><b><strong>{{$post->summary}}</strong></b></h3>
                                <p>
                                    {{$post->description}}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
