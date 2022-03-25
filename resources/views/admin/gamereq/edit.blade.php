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

                <form class="forms-sample" method="POST" action="{{ route('admin-games_required-update') }}"
                      enctype="multipart/form-data">
                    @csrf
                    @foreach($categoriesWithRequirements as $categoriesWithRequirement)
                        @if($categoriesWithRequirement->type==1)
                            <input type="hidden" name="category_id"
                                   value="{{ $categoriesWithRequirement->category_id }}"/>

                            <h3 class="card-title"><b>Minimum System Requirements</b></h3>

                            <div class="form-group">
                                <label>Minimum Requirement of CPU </label>
                                <input type="text" name="min_cpu" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->cpu }}" required>
                            </div>
                            <div class="form-group">
                                <label>Minimum Requirement of RAM</label>
                                <input type="text" name="min_ram" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->ram }}" required>
                            </div>
                            <div class="form-group">
                                <label>Minimum Requirement of GPU</label>
                                <input type="text" name="min_gpu" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->gpu }}" required>
                            </div>
                            <div class="form-group">
                                <label>Minimum Requirement of DX</label>
                                <input type="text" name="min_dx" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->dx }}" required>
                            </div>
                            <div class="form-group">
                                <label>Minimum Requirement of OS</label>
                                <input type="text" name="min_os" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->os }}" required>
                            </div>
                            <div class="form-group">
                                <label>Minimum Requirement of STO</label>
                                <input type="text" name="min_sto" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->sto }}" required>
                            </div>
                            <div class="form-group">
                                <label>Minimum Requirement of Sound</label>
                                <input type="text" name="min_sound" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->sound }}" required>
                            </div>
                        @endif
                    @endforeach

                    <h3 class="card-title"><b>Recommended System Requirements</b></h3>

                    @foreach($categoriesWithRequirements as $categoriesWithRequirement)
                        @if($categoriesWithRequirement->type==2)

                            <input type="hidden" name="category_id"
                                   value="{{ $categoriesWithRequirement->category_id }}"/>
                            <div class="form-group">
                                <label>Recommended CPU</label>
                                <input type="text" name="max_cpu" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->cpu }}" required>
                            </div>
                            <div class="form-group">
                                <label>Recommended RAM</label>
                                <input type="text" name="max_ram" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->ram }}" required>
                            </div>
                            <div class="form-group">
                                <label>Recommended GPU</label>
                                <input type="text" name="max_gpu" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->gpu }}" required>
                            </div>
                            <div class="form-group">
                                <label>Recommended DX</label>
                                <input type="text" name="max_dx" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->dx }}" required>
                            </div>
                            <div class="form-group">
                                <label>Recommended OS</label>
                                <input type="text" name="max_os" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->os }}" required>
                            </div>
                            <div class="form-group">
                                <label>Recommended STO</label>
                                <input type="text" name="max_sto" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->sto }}" required>
                            </div>
                            <div class="form-group">
                                <label>Recommended Sound</label>
                                <input type="text" name="max_sound" id="title" class="form-control"
                                       value="{{ $categoriesWithRequirement->sound }}" required>
                            </div>
                        @endif
                    @endforeach

                    <button type="submit" class="btn btn-primary text-white me-0"
                            style="background-color: #303030; color: burlywood;">Submit
                    </button>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection


