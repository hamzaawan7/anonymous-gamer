@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Selected Post</h4>

                <form class="forms-sample" method="post" action="{{ route('admin-posts-update') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $post->id }}"/>

                    <div class="form-group">

                        <div class="form-group">

                            <input type="text" name="users_id" id="users_id" class="form-control"
                                   value="{{ $post->users_id }}" hidden>
                        </div>
                        <div class="form-group">

                            <input type="text" name="category_id" id="category_id" class="form-control"
                                   value="{{ $post->category_id }}" hidden>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}"
                                   required>
                        </div>

                        <div class="form-group">
                            <div class="input-group col-xs-12">
                                <input name="old_image" type="text" value="{{ $post->images }}"
                                       class="form-control file-upload-info" disabled placeholder="Upload Image" hidden>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="image" class="file-upload-default" required>
                            <div class="input-group col-xs-12">
                                <input type="text" value="{{ $post->images }}" class="form-control file-upload-info"
                                       disabled placeholder="Upload Image">
                                <span class="input-group-append">
                           <button class="file-upload-browse btn btn-primary text-white me-0" type="button"
                                   style="background-color: #303030; color: burlywood;">Update Image</button>
                        </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tags:</label>
                            <input type="text" value="{{ $post->tags }}" name="tags" class="form-control" data-role="tagsinput">

                        </div>

                        <div class="form-group">
                            <label>Summary</label>
                            <textarea class="form-control" name="summary" id="summary"
                                      rows="2">{{ $post->summary }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="description"
                                      rows="6">{{ $post->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary text-white me-0"
                                style="background-color: #303030; color: burlywood;">Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description')
    </script>
@endsection
