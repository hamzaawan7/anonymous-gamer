@extends('layouts.app3')

@section('title')
    Login
@endsection

@section('content')

<div class="wrapper fadeInDown">
    <div id="formContent">

        <h2 class="active"> Sign In </h2>

        <form method="POST" action="{{ route('admin-login') }}">
            @csrf
            <div>
                <label style="float: left; padding-left: 8%">Email</label>
                <input id="email" type="email" class="fadeIn second @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                       >
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <label style="float: left; padding-left: 8%">Password</label>
                <input id="password" type="password"
                       class="fadeIn third @error('password') is-invalid @enderror" name="password" required
                       autocomplete="current-password" >

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div>
                <button type="submit" class="button-18" role="button">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
<br>
        <div id="formFooter" style="display: flex; padding-left: 10%">
            <label>
                Remember me
            </label>&nbsp
            <input class="form-check-input" type="checkbox" name=`"remember"
                   id="remember" {{ old('remember') ? 'checked' : '' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div >
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

        </div>
        <p style="padding-left: 7%; padding-right: 7%">Don't have an account? <a href="{{ route('admin-register') }}">Creat Your Account</a> it takes less than a
            minute</p>

    </div>
</div>
@endsection
