@extends('layouts.master')

@section('title')
    Edit Profile
@endsection

@section('image')

    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="300">
@endsection


@section('h2')
    <h2 class="master-h2">Change your password</h2>
@endsection

@section('content')
    @include('partials.show-messages')
        
    <div id="reset-form-div">
        {!! Form::open() !!}

        {!! Form::label('current_password', 'Current Password') !!}
        {!! Form::password('current_password') !!}

        {!! Form::label('new_password', 'New Password') !!}
        {!! Form::password('new_password') !!}

        {!! Form::label('new_password_confirmation', 'New Password Confirmation') !!}
        {!! Form::password('new_password_confirmation') !!}

        {!! Form::submit('Change Password') !!}

        {!! Form::close() !!}
    </div>
@endsection