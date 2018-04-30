@extends('layouts.master')

@section('title')     
    Free Your Fire - Reset Password
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100" alt="photo of jewelry">
@endsection

@section('h2')     
    <h2 class="master-h2">Reset Password</h2>
@endsection

@section('content')

    <div id="reset-form-div">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('reset-email') }}">
            @csrf

            <div>
                <label for="email" class="label">E-Mail Address</label>
               
                <input id="email" type="email" class="text-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif     
            </div>
         
            <div>
                <button type="submit" class="form-submit">
                    Send Password Reset Link
                </button>
            </div>    
        </form>
    </div>
@endsection
