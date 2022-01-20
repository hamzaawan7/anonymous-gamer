@extends('layouts.app3')

@section('title')
    Login
@endsection

@section('content')

<div class="wrapper fadeInDown">
    <div id="formContent">

        <form method="POST" action="{{ route('admin-register') }}">
            @csrf
            <h2 class="active"> Register Account </h2><br><br>
            @include('flash-message')<br><br>

            <div>
                <label style="float: left; padding-left: 8%">Enter Full Name</label>
                <input id="name" type="text" class="fadeIn second @error('name') is-invalid @enderror" name="name"
                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <label style="float: left; padding-left: 8%">Enter Email</label>
                <input id="email" type="email" class="fadeIn third @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <label style="float: left; padding-left: 8%">Enter Password</label>
                <input id="password" type="password" class="fadeIn fourth @error('password') is-invalid @enderror"
                       name="password" required autocomplete="new-password"
                       placeholder="Enter minimum 8 digit Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <label style="float: left; padding-left: 8%">Confirm Password</label>
                <input id="password-confirm" type="password" class="fadeIn fourth" name="password_confirmation" required
                       autocomplete="new-password">
            </div>

            <div>
                <button type="submit" class="button-18" role="button">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
        <br>
        <div id="formFooter" style="display: flex;">

            <p style="padding-left: 15%">Already have Account <a href="{{ route('admin-login') }}">Please Sign In</a></p>
        </div>
    </div>
</div>
@endsection
