@extends('layouts.app3')

@section('title')
    Confirm Password
@endsection

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1><img src="{{asset('images/version/garden-logo2.png')}} " style="padding-top: 35%" alt=""></h1>
            </div>
        </div>

        <div class="right">
            <h5 style="font-size: 40px">Admin Panel</h5>
            <h6 style="font-size: 25px">Confirm Password before Proceeding</h6>
            <br>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div>

                    <div>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
