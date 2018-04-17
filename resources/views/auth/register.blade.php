@extends('layouts.master')

@section('title')     
    Free Your Fire - Register
@endsection

@section('image')
    <img src="/images/master2.jpg" width="1520" height="300">
@endsection

@section('h2')     
    Register
@endsection

@section('content')
<div id="register-form-div">
    <form method="POST" action="{{ route('register') }}" id="register-form">
        @csrf

        <div>
            <label for="name" class="label">Name</label>
       
            <input id="name" type="text" class="text-field{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>
        
        <br>
        <div>
            <label for="email" class="label">E-Mail Address</label>
    
            <input id="email" type="email" class="text-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
        <div>
            <label for="password-confirm" class="label">Confirm Password</label>

                <input id="password-confirm" type="password" class="text-field" name="password_confirmation" required>
        </div>

        <br>
        <div>
            <button type="submit" class="form-submit">
                Register
            </button>
        </div>
    </form>
</div>                
@endsection
