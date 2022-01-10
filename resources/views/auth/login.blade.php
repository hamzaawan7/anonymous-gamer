@extends('layouts.app')

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
            <h5 style="font-size: 40px">Admin Login</h5>
            <br>
            <p>Don't have an account? <a href="{{ route('register') }}">Creat Your Account</a> it takes less than a
                minute</p>

            <form method="POST" action="{{ route('admin-login') }}">
                @csrf

                <div>
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                               placeholder="Enter Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div>

                    <div>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password" placeholder="Enter Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <br>

                <div style="display: flex;">
                    <label>
                        Remember me
                    </label>
                    <input class="form-check-input" type="checkbox" name=`"remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                </div>
                <div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>


                </div>
        </div>
        </form>
        <div>


        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
