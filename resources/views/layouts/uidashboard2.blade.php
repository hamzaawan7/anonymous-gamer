<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Anonymous Gamer</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
{{--<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon"/>--}}
<link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{asset('style.css')}}" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{asset('css/colors.css')}}" rel="stylesheet">

<!-- Version Garden CSS for this template -->
<link href="{{asset('css/version/garden.css')}}" rel="stylesheet">
<link href="{{asset('css/version/review.css')}}" rel="stylesheet">
<link href="{{asset('css/version/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<![endif]-->

</head>
<body>

<div id="wrapper">
    <div class="collapse top-search" id="collapseExample">
        <div class="card card-block">
            <div class="newsletter-widget text-center">
                <form class="form-inline">
                    <input type="text" class="form-control" placeholder="What you are looking for?">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="topbar-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                    <div class="topsocial" style="flex: auto">
                        <a href="https://www.facebook.com/mlkabawan/" data-toggle="tooltip" data-placement="bottom"
                           title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCmZsl3rS6G9SEkQ5VmZPANQ/videos" data-toggle="tooltip"
                           data-placement="bottom" title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="https://www.reddit.com/user/Anonymous-Gamers/" data-toggle="tooltip"
                           data-placement="bottom" title="Reddit" target="_blank"><i class="fa fa-reddit"></i></a>
                        <a href="https://twitter.com/mlkabawan335" data-toggle="tooltip" data-placement="bottom"
                           title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/anonymous_gamerzz/" data-toggle="tooltip"
                           data-placement="bottom" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://plus.google.com/u/0/115454561758013515271" data-toggle="tooltip"
                           data-placement="bottom" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 hidden-md-down">
                    <a data-toggle="tooltip"
                       data-placement="bottom" href="{{route('home')}}">Home</a> &nbsp;&nbsp;&nbsp;
                    <a data-toggle="tooltip"
                       data-placement="bottom" href="{{route('blogs')}}">Blogs</a>&nbsp;&nbsp;&nbsp;
                    <a data-toggle="tooltip"
                       data-placement="bottom" href="{{route('news')}}">News</a>&nbsp;&nbsp;&nbsp;
                    <a data-toggle="tooltip"
                       data-placement="bottom" href="{{route('games')}}">Games</a>&nbsp;&nbsp;&nbsp;
                    <a data-toggle="tooltip"
                       data-placement="bottom" href="{{route('reviews')}}">Reviews</a>&nbsp;&nbsp;&nbsp;

                    <a data-toggle="tooltip"
                       data-placement="bottom" href="{{ route('contact') }}">Contact</a>&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="topsearch text-right">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                           aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')

    @include('layouts.uifooter')
    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->

<!-- Core JavaScript
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/review.js')}}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

</body>
</html>
