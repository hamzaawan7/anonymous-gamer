@extends('layouts.app')

@section('content')

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
    <form action="{{ route('admin_post_store') }}" class="container" method="post" enctype="multipart/form-data">

    <div class="row">
            <div class="card">


                <div>
                    <label for="category_id">Category </label>
                    <select name="category_id[]">
                        <option hidden>Select Category</option>
                        @foreach ($category as $key => $value)
                            <option value="{{ $value->id }}">
                                {{ $value->name }}
                            </option>
                        @endforeach

                    </select>

                </div>

                <label>Title</label>
                <input type="text" id="title" name="title"><br><br>

                <label><b>Image</b></label>
                <input type="file" name="images" required>

                <label>Summary of Post</label>

                <textarea id="summary" name="summary" rows="2" cols="50"> </textarea>

                <label>Description of Post</label>

                <textarea id="description" name="description" rows="10" cols="50"> </textarea>

                <input type="submit" value="Submit">

            </div>
    </div>
    </form>
    </body>

