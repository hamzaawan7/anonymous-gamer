@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Post</h4>

                <form class="forms-sample" method="POST" action="{{ route('admin-posts-store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category_id">Category </label>
                        <select class="form-control" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="images" class="file-upload-default" required>
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled
                                   placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary text-white me-0"
                                  type="button" style="background-color: #303030; color: burlywood;">Upload</button>
                        </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tags:</label>
                        <input type="text" name="tags[]" class="form-control" data-role="tagsinput">

                    </div>

                    <div class="form-group">
                        <label>Summary</label>
                        <textarea class="form-control" name="summary" id="summary" rows="2"></textarea>
                    </div>


                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary text-white me-0"
                            style="background-color: #303030; color: burlywood;">Submit
                    </button>
                    <br>
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
