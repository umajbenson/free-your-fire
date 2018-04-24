@extends('layouts.master')

@section('title')     
    Free Your Fire - Login
@endsection

@section('image')
    <img src="/images/crystals.jpg" width="1520" height="100" alt="SHOWING">
@endsection

@section('h2')     
    Login
@endsection

@section('content')

    <div id="login-form-div">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email" class="label">E-Mail Address</label>
                
                <input id="email" type="email" class="text-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif             
            </div>

            <br>
            <div>
                <label for="password" class="label">Password</label>
                
                <input id="password" type="password" class="text-field{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif              
            </div>

            <br>
            <div class="login-checkbox">              
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>          
            </div>

            <br>
            <div class="login">                                  
                <button type="submit" class="form-submit">
                    Login
                </button>
            </div>
            <div class="login">
                <a class="login-buttons" href="{{ route('reset-password') }}">
                        Forgot Your Password?</a>
                <a class= "login-buttons" href="/register"> Register a New Account</a>              
            </div>
        </form>
    </div>
@endsection"
