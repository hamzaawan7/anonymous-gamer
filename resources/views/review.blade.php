@extends('layouts.userdashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <p style="font-size: 50px; font-family: Brush Script MT, Brush Script Std, cursive; padding-top: 1%;text-align: center">
        Reviews</p>

    <hr>

    <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                This Blogs help to increase Information related to new games. This is one of the best
                                steps to helping Gamers
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img src="images/img-1.jpg" alt=""></div>
                                <h3 class="title">Ahsan</h3>
                                <span class="post">Pro Gamer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                This Helps alot about the features and usage of Games. This is one of the best steps to
                                helping Gamers </p>
                            <div class="testimonial-content">
                                <div class="pic"><img src="images/img-2.jpg" alt=""></div>
                                <h3 class="title">Hamza Awan</h3>
                                <span class="post">Pro PUBG Player</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                This is a best place to get all news about Fifa and all other important events. This is
                                one of the best steps to helping Gamers </p>
                            <div class="testimonial-content">
                                <div class="pic"><img src="images/img-3.jpg" alt=""></div>
                                <h3 class="title">Sheryar Ali</h3>
                                <span class="post">Footbal Player</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
