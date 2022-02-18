@extends('layouts.dashboard')

@section('title')
    Anonymous Gamer
@endsection

@section('content')

    @foreach($gamesWithRequirements as $gamesWithRequirement)
        @if($gamesWithRequirement->type==1 )
    <div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="text-align: center; font-size: large"><b>Minimum Requirements</b></h4>
                <ol>
                    <li>{{$gamesWithRequirement->cpu}}</li>
                    <li>{{$gamesWithRequirement->ram}}</li>
                    <li>{{$gamesWithRequirement->gpu}}</li>
                    <li>{{$gamesWithRequirement->dx}}</li>
                    <li>{{$gamesWithRequirement->os}}</li>
                    <li>{{$gamesWithRequirement->sto}}</li>
                    <li>{{$gamesWithRequirement->sound}}</li>
                </ol>
        </div>
        @endif
    @endforeach

        @foreach($gamesWithRequirements as $gamesWithRequirement)
            @if($gamesWithRequirement->type==2 )
                <div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center; font-size: large"><b>Recommended Requirements</b></h4>
                            <ul>
                                <li>{{$gamesWithRequirement->cpu}}</li>
                                <li>{{$gamesWithRequirement->ram}}</li>
                                <li>{{$gamesWithRequirement->gpu}}</li>
                                <li>{{$gamesWithRequirement->dx}}</li>
                                <li>{{$gamesWithRequirement->os}}</li>
                                <li>{{$gamesWithRequirement->sto}}</li>
                                <li>{{$gamesWithRequirement->sound}}</li>
                            </ul>
                    </div>
        @endif
    @endforeach

@endsection
