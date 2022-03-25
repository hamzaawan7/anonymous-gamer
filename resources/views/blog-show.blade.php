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
                            <form class="clearfix" id="comment_form">
                                @csrf
                                <h4>Post a comment:</h4>
                                <textarea name="text" id="text_area" class="form-control" cols="30" rows="3"></textarea>
                                <input type="hidden" name="post_id"
                                       value="{{ $post->id }}" id="post_id"/>
                                <input type="hidden" name="type_id"
                                       value="{{ $post->type_id }}"/>
                                <button type="button" id="saveComment" class="btn btn-primary btn-sm pull-right">
                                    Submit
                                </button>
                            </form>
                            <!-- comments wrapper -->
                            <div style="flex: auto">
                                <div id="comments-wrapper">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            getComment();
            $(document).on('click', '#saveComment', function (e) {
                e.preventDefault(e);
                const data = $("#comment_form").serialize();
                const route = '{{route("admin-comments-create")}}';

                // const user_id = $(this).attr("user-id");

                $.ajax({
                    url: route,
                    type: "post",
                    data: data,
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    success: function (response) {
                        $('#text_area').val('');
                        getComment();
                        alert("Comment is saved Successfully")

                    }
                });
            });

            function getComment() {
                const route = '{{route("admin-comments-view")}}';
                const post_id = $('#post_id').val();
                $(`#comments-wrapper`).html('');

                $.ajax({
                    type: "GET",
                    url: route,
                    data: {id: post_id},
                    dataType: "json",
                    success: function (response) {
                        $.each(response.data, function (key, data) {
                            $('#comments-wrapper').append(`<div class="${data.id}"><div class="comment clearfix">` +
                                `<div class="comment-details" style="padding-top: 10px">` +
                                `<span class="comment-name" style="font-weight: bold; font-size: large; color: black">Anonymous</span><p style="color: black; font-size: large">` + data.text + `</p>` +
                                `<button type="button" id="${data.id}" onclick="getReply(this.id)" name="replybutton" class="fa fa-mail-reply">Reply</button>` + `
                                   <button id="${data.id}" onclick="getAllReply(this.id)" style="float: right" class="fa fa-eye replyShow">Recent Replies</button>` +
                                `<div id="reply-wrapper` + data.id + `" style="padding-left: 50px">` + `<div id="reply-all-wrapper` + data.id + `">` +
                                `</div></div><br></div></div>`);
                        });
                    }

                });

            }

        });

        function getAllReply(id) {

            const route = '{{route("admin-reply-display")}}';
            const parent_id = $('#parent_id').val();
            $(`#reply-all-wrapper` + id).html('');

            $.ajax({
                type: "GET",
                url: route,
                data: {parent_id: id},
                dataType: "json",
                success: function (response) {
                    $.each(response.data, function (key, data) {
                        $('#reply-all-wrapper' + id).append(`<div class="${data.id}" id="allReply"><div class="comment clearfix">` +
                            `<div class="comment-details">` +
                            `<span class="comment-name" style="font-weight: bold">Anonymous</span><p>` + data.text + `</p>` + `</div><br></div></div>`);
                    });
                }
            });
        }

        function getReply(id) {
            $('#' + id).replaceWith(`
                    <div id="reply-box">
                    <form class="clearfix" id="reply_form">
                        @csrf
            <textarea name="text" id="text" class="form-control" cols="30" rows="3"></textarea>
            <input type="hidden" name="post_id" value="{{ $post->id }}" id="post_id"/>
                        <input type="hidden" name="type_id" value="{{ $post->type_id }}"/>
                        <input type="hidden" id="parent_id" name="parent_id" value="${id}"/>
                        <button type="button" id="saveReply" class="btn btn-primary btn-sm pull-right">
                            Reply
                        </button>
                    </form></div>
                `)
        }

        $(document).on('click', '#saveReply', function (e) {
            e.preventDefault(e);
            const data = $("#reply_form").serialize();
            const route = '{{route("admin-reply-create")}}';

            $.ajax({
                url: route,
                type: "post",
                data: data,

                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                success: function (response) {
                    $('#text').val('');
                    alert("Reply is saved Successfully")
                    location.reload()
                }
            });
        });
    </script>

@endsection

