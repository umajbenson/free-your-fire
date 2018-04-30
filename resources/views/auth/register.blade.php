@extends('layouts.master')

@section('title')     
    Free Your Fire - Register
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100" alt="Row of crystals">
@endsection

@section('h2')     
    <h2 class="master-h2">Register</h2>
@endsection

@section('content')

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="form-div">
        <form method="POST" action="{{ route('register') }}" id="register-form">
            @csrf

            <div>
                <label for="name" class="label">User Name</label>
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

            <div class="g-recaptcha" data-sitekey="6Ldq3VMUAAAAAOyaJzRGnCf9vGZBUZTvt76Lkm8Z"></div>

            <button type="submit" name="submit" class="form-submit">
                Register
            </button>    
        </form>
    </div>                
@endsection
