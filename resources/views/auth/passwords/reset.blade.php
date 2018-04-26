@extends('layouts.master')

@section('title')     
    Free Your Fire - Reset Password
@endsection

@section('image')
    <img src="/images/crystals.jpg" width="1520" height="100" alt="photo of jewelry">
@endsection

@section('h2')     
    Reset Password
@endsection

@section('content')
    @include('partials.show-messages')
    
    <div id="reset-form-div">
        <form method="POST" action="{{ route('password.request') }}">
            @csrf
            <input name="token" type="text" value="{{ $token }}" style="display:none;">

            <div>
                <label for="email" class="label">E-Mail Address</label>

                <input id="email" type="email" class="text-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>

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
                
                <input id="password-confirm" type="password" class="text-field{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
            </div>
            <br>

            <div>
                <div>
                    <button type="submit" class="form-submit">
                        Reset Password
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
