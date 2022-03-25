@extends('layouts.dashboard')

@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

    <div class="bg-img">
        <form action="{{ route('new_post_store') }}" class="container" method="post" enctype="multipart/form-data">
            @csrf

            <h1>Create New Post</h1>
            <div>
                <label><b>User Id</b></label>
                <input id="name" type="text" name="name" required>
            </div>
            <div>
                <label><b>Select Category</b></label>
                <input id="name" type="text" name="name" required>
            </div>

            <div>
                <label><b>Title</b></label>
                <input id="name" type="text" name="name" required>
            </div>

            <div>
                <label><b>Images</b></label>
                <input type="file" name="image" required>
            </div>

            <div>
                <label><b>Summary</b></label>
                <textarea id="summary" name="summary" rows="4" cols="20" required></textarea>7
            </div>

            <div>
                <label><b>Description</b></label>
                <textarea id="description" name="description" rows="20" cols="500" required></textarea>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    </body>
