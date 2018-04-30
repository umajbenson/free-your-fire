@extends('layouts.master')

@section('title')
    Edit Profile
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="300" alt="Row of crystals">
@endsection

@section('h2')
    <h2 class="master-h2">Edit your Profile</h2> 
@endsection

@section('content')
    @include('partials.show-messages')

    <div class="form-div">
        {!! Form::open() !!}

        <div>
            {!! Form::label('name', 'Name', ['class' => 'label']) !!}
            {!! Form::text('name', old('name', Auth::user()->name), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
            {!! Form::label('email', 'Email', ['class' => 'label']) !!}
            {!! Form::text('email', old('email', Auth::user()->email), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
            {!! Form::label('phone', 'Phone Number', ['class' => 'label']) !!}
            {!! Form::text('phone', old('phone', Auth::user()->phone), ['class' => 'text-field']) !!}
        </div>
      
        {!! Form::submit('Update Profile', ['class' => 'form-submit', 'id' => "profile-submit"]) !!}

        <br>
        <a id="change-password-link" href="/change-password">Change your password</a>

        {!! Form::close() !!}
    </div>
@endsection

