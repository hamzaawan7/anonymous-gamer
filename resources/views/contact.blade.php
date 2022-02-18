@extends('layouts.userdashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')
    <section class="section wb" style="padding-top: 10px">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <h4>Who we are</h4>
                                <p>Anonymous Gamer publishes multiple stories on a daily basis to inform, empower,
                                    and inspire its game developer readership.</p>
                            </div>
                            <div class="col-lg-4">
                                <h4>How we help?</h4>
                                <p>We usually cover FIFA and PES content, and try upload gameplay of new games in the
                                    market. </p>
                            </div>
                            <div class="col-lg-4">
                                <h4>Normal Question</h4>
                                <p>Our clients Normally have questions related to new Games reviews and You will get it
                                    in our News Section.</p>
                            </div>
                        </div>
                        <hr class="invis">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <form class="form-wrapper">
                                    <input type="text" class="form-control" placeholder="Your name">
                                    <input type="text" class="form-control" placeholder="Email address">
                                    <input type="text" class="form-control" placeholder="Phone">
                                    <input type="text" class="form-control" placeholder="Subject">
                                    <textarea class="form-control" placeholder="Your message"></textarea>
                                    <button type="submit" class="btn btn-primary">Send <i
                                            class="fa fa-envelope-open-o"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
