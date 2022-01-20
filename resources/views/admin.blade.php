@extends('layouts.dashboard')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

    <div class="box-form" style="padding-right: 100px">
        <div class="left">
            <div class="overlay">
                <h1><img src="{{asset('images/version/garden-logo2.png')}} " style="padding-top: 5%; padding-bottom: 5%"
                         alt=""></h1>

            </div>
        </div>
        <div class="right">
            <h5 style="font-size: 40px; text-align: center">Admin Login</h5>
            <br>
            @guest
                @if (Route::has('admin-login'))
                    <button class="nav-item">
                        <a class="nav-link" href="{{ route('admin-login') }}">{{ __('Login') }}</a>
                    </button>
                @endif

                @if (Route::has('admin-register'))
                    <button class="nav-item">
                        <a class="nav-link" href="{{ route('admin-register') }}">{{ __('Register') }}</a>
                    </button>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </div>
@endsection
