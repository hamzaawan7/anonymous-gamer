@extends('layouts.app')

@section('content')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="category.css" href="styles.css">
</head>
<body>

<div class="bg-img">
    <form action="{{ route('new_category_store') }}" class="container" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Create New Category</h1>

        <label><b>Image</b></label>
        <input type="file" name="image" required>

        <label><b>Category Name</b></label>
        <input id="name" type="text"  name="name" required>

        <button type="submit" class="btn">Submit</button>
    </form>
</div>

</body>
