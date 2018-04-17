@extends('layouts.master')

@section('title')
    Edit Profile
@endsection

@section('image')

    <img src="/images/master2.jpg" width="1520" height="300">
@endsection


@section('h2')
    Edit your Profile
@endsection

@section('content')
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
    <div>
        {!! Form::submit('Update Profile', ['class' => 'form-submit', 'id' => "profile-submit"]) !!}
    </div>


    {!! Form::close() !!}
@endsection