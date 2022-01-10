@extends('layouts.app')

@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <div class="bg-img">
        <form action="{{ route('review_store') }}" class="container" method="post" enctype="multipart/form-data">
            @csrf

            <h1>Review on Current Post</h1>
            <div>
                <label><b>Post Id</b></label>
                <input id="name" type="text" name="name" required>
            </div>
            <label><b>Give Rating</b></label>
            <div class="rate">
                <input type="radio" id="star5" name="rate" value="5"/>
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4"/>
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3"/>
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2"/>
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1"/>
                <label for="star1" title="text">1 star</label>
            </div>
                <div>
                    <label><b>Comment</b></label>
                    <textarea id="summary" name="summary" rows="4" cols="20" required></textarea>7
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control p_input">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input">
                </div>

                <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    </body>
