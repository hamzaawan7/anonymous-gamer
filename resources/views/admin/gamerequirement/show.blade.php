@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    @foreach($categoriesWithRequirements as $categoriesWithRequirement)
        @if($categoriesWithRequirement->type==1 )
    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; font-size: large"><b>Minimum Requirements</b></h4>
                <ol>
                    <li>{{$categoriesWithRequirement->cpu}}</li>
                    <li>{{$categoriesWithRequirement->ram}}</li>
                    <li>{{$categoriesWithRequirement->gpu}}</li>
                    <li>{{$categoriesWithRequirement->dx}}</li>
                    <li>{{$categoriesWithRequirement->os}}</li>
                    <li>{{$categoriesWithRequirement->sto}}</li>
                    <li>{{$categoriesWithRequirement->sound}}</li>
                </ol>
        </div>
        @endif
    @endforeach

        @foreach($categoriesWithRequirements as $categoriesWithRequirement)
            @if($categoriesWithRequirement->type==2 )
                <div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center; font-size: large"><b>Recommended Requirements</b></h4>
                            <ul>
                                <li>{{$categoriesWithRequirement->cpu}}</li>
                                <li>{{$categoriesWithRequirement->ram}}</li>
                                <li>{{$categoriesWithRequirement->gpu}}</li>
                                <li>{{$categoriesWithRequirement->dx}}</li>
                                <li>{{$categoriesWithRequirement->os}}</li>
                                <li>{{$categoriesWithRequirement->sto}}</li>
                                <li>{{$categoriesWithRequirement->sound}}</li>
                            </ul>
                    </div>
        @endif
    @endforeach

@endsection
