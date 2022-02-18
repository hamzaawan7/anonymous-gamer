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
                                    {!!$post->description!!}
                                </p>

                            </div>
                        </div>
                        <!-- comments section -->
                        <div class="col-md-6 col-md-offset-3 comments-section">
                            <!-- comment form -->
                            <form class="clearfix" action="{{ route('admin-comments-create') }}" method="post" id="comment_form">
                                @csrf
                                <h4>Post a comment:</h4>
                                <textarea name="text" id="text" class="form-control" cols="30" rows="3"></textarea>
                                <input type="hidden" name="post_id"
                                       value="{{ $post->id }}"/>
                                <input type="hidden" name="type_id"
                                       value="{{ $post->type_id }}"/>
                                <button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
                            </form>

{{--                            <h2><span id="comments_count">0</span> Comment(s)</h2>--}}
                            <hr>
                            <!-- comments wrapper -->
                            <div id="comments-wrapper">
                                <div class="comment clearfix">
                                    <img src="profile.png" alt="" class="profile_pic">
                                    <div class="comment-details">
                                        <span class="comment-name">Melvine</span>
                                        <span class="comment-date">Apr 24, 2018</span>
                                        <p>This is the first reply to this post on this website.</p>
                                        <a class="reply-btn" href="#" >reply</a>
                                    </div>
                                    <div>
{{--                                        <!-- reply -->--}}
{{--                                        <div class="comment reply clearfix">--}}
{{--                                            <img src="profile.png" alt="" class="profile_pic">--}}
{{--                                            <div class="comment-details">--}}
{{--                                                <span class="comment-name">M Talha Javed</span>--}}
{{--                                                <span class="comment-date">{{$post->comment->created_at}}</span>--}}
{{--                                                <p>{{$post->comment->text}}</p>--}}
{{--                                                <a class="reply-btn" href="">reply</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
