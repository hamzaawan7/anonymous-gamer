@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Selected Category</h4>

                <form class="forms-sample" method="post" action="{{ route('admin-categories-update') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $category->id }}"/>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input id="name" type="text" name="name" value="{{ $category->name }}" required
                               class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="input-group col-xs-12">
                            <input name="old_image" type="text" value="{{ $category->image }}"
                                   class="form-control file-upload-info" disabled placeholder="Upload Image" hidden>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="image" class="file-upload-default" required>
                        <div class="input-group col-xs-12">
                            <input type="text" value="{{ $category->image }}" class="form-control file-upload-info"
                                   disabled placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary text-white me-0" type="button"
                                  style="background-color: #303030; color: burlywood;">Update Image</button>
                        </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary text-white me-0"
                            style="background-color: #303030; color: burlywood;">Submit
                    </button>

                </form>
            </div>
        </div>
    </div>


@endsection
