@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <form class="forms-sample" method="POST" action="{{ route('admin-games_required-store') }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="game_id">Games List </label>
                        <select class="form-control" name="game_id">
                            <option value="">Select Game</option>
                            @foreach ($games as $key => $value)
                                <option value="{{ $value->id }}">
                                    {{ $value->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <h3 class="card-title"><b>Minimum System Requirements</b></h3>

                    <div class="form-group">
                        <label>Minimum Requirement of CPU </label>
                        <input type="text" name="min_cpu" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Minimum Requirement of RAM</label>
                        <input type="text" name="min_ram" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Minimum Requirement of GPU</label>
                        <input type="text" name="min_gpu" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Minimum Requirement of DX</label>
                        <input type="text" name="min_dx" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Minimum Requirement of OS</label>
                        <input type="text" name="min_os" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Minimum Requirement of STO</label>
                        <input type="text" name="min_sto" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Minimum Requirement of Sound</label>
                        <input type="text" name="min_sound" id="title" class="form-control" required>
                    </div>

                    <h3 class="card-title"><b>Recommended System Requirements</b></h3>
                    <div class="form-group">
                        <label>Recommended CPU</label>
                        <input type="text" name="max_cpu" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Recommended RAM</label>
                        <input type="text" name="max_ram" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Recommended GPU</label>
                        <input type="text" name="max_gpu" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Recommended DX</label>
                        <input type="text" name="max_dx" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Recommended OS</label>
                        <input type="text" name="max_os" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Recommended STO</label>
                        <input type="text" name="max_sto" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Recommended Sound</label>
                        <input type="text" name="max_sound" id="title" class="form-control" required>
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


