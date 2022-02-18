@extends('layouts.userdashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <section class="section first-section" style="padding-top: 10px">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                @foreach($posts as $post)
                    @if($post->type_id==1)
                        <div class="left-side">
                            <div class="masonry-box post-media">
                                <img src="{{asset('images/upload/post/'.$post->images)}}" alt=""
                                     class="img-fluid">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="#" title="">{{$post->title}}</a></span>
                                        <h4><a href="{{ url('blogs/view/'.$post->id) }}"
                                               title="">{{$post->summary}}</a></h4>
                                        <small><a href="{{ url('blogs/view/'.$post->id) }}"
                                                  title="">{{date('d/m/y', strtotime($post->created_at))}}</a></small>
{{--                                        <small><a href="#" title="">{{ $post->user->name  }}</a></small>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="section wb">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    @foreach($posts as $post)
                        @if($post->type_id==2 )
                            <div class="page-wrapper">
                                <div class="blog-list clearfix">
                                    <div class="blog-box row">
                                        <div class="col-md-4">
                                            <div class="post-media">
                                                <a href="{{ url('blogs/view/'.$post->id) }}" title="">
                                                    <img src="{{asset('images/upload/post/'.$post->images)}}"
                                                         alt="" class="img-fluid">
                                                    <div class="hovereffect"></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="blog-meta big-meta col-md-8">
                                            <span class="bg-aqua"><a href="{{route('games')}}"
                                                                     title="">{{$post->title}}</a></span>
                                            <h4><a href="{{ url('blogs/view/'.$post->id) }}"
                                                   title="">{{$post->summary}}</a></h4>
                                            <p>The newly-launched futuristic version of the famous
                                                Mobile game -- New State on Thursday confirmed the maintenance schedule
                                                on its
                                                platform.</p>
                                            <small><a href="#" title=""><i class="fa fa-eye"></i>
                                                    1887</a></small>
                                            <small><a href="{{ url('blogs/view/'.$post->id) }}"
                                                      title="">{{date('d/m/y', strtotime($post->created_at))}}</a></small>
{{--                                            <small><a href="#" title="">{{ $post->name  }}</a></small>--}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif
                    @endforeach
                    <hr class="invis">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h2 class="widget-title">Search</h2>
                            <form class="form-inline search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search on the site">
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>

                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach($posts as $post)
                                        @if($post->type_id==1)
                                            <a href="{{ url('blogs/view/'.$post->id) }}"
                                               class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="{{asset('images/upload/post/'.$post->images)}}"
                                                         alt="" class="img-fluid float-left">
                                                    <h5 class="mb-1">{{$post->summary}}</h5>
                                                    <small>{{date('d/m/y', strtotime($post->created_at))}}</small>
                                                </div>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Advertising</h2>
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_04.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Instagram Feed</h2>
                            <div class="instagram-wrapper clearfix">
                                <a href="https://www.instagram.com/p/CXTt_J0AaqN/" target="_blank"><img
                                        src="upload/garden_sq_01.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CXHpvN8tJxD/" target="_blank"><img
                                        src="upload/garden_sq_02.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CYEMKgzPjR5/" target="_blank"><img
                                        src="upload/garden_sq_03.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CXgF5BWA7Mg/" target="_blank"><img
                                        src="upload/garden_sq_04.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CYKfwW9v4fo/" target="_blank"><img
                                        src="upload/garden_sq_05.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CY6bnSatvuH/" target="_blank"><img
                                        src="upload/garden_sq_06.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CYVK7xSvUIA/" target="_blank"><img
                                        src="upload/garden_sq_07.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CZRRUSCgcIB/" target="_blank"><img
                                        src="upload/garden_sq_08.jpg" alt="" class="img-fluid"></a>
                                <a href="https://www.instagram.com/p/CXTt_J0AaqN/" target="_blank"><img
                                        src="upload/garden_sq_09.jpg" alt="" class="img-fluid"></a>
                            </div><!-- end Instagram wrapper -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Popular games</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="{{route('games')}}">PUBG <span>(21)</span></a></li>
                                    <li><a href="{{route('games')}}">Football <span>(15)</span></a></li>
                                    <li><a href="{{route('games')}}">Footsal <span>(31)</span></a></li>
                                    <li><a href="{{route('games')}}">Mobile Games <span>(22)</span></a></li>
                                    <li><a href="{{route('games')}}">Funny Games <span>(66)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

@endsection
