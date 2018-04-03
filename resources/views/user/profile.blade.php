@extends('layouts.master')

@section('title')
    Edit Profile
@endsection

@section('image')

    <img src="/images/backgrounds/stars-bg-crop.jpg">
@endsection


@section('h2')
    Edit Your Profile
@endsection

@section('content')
    {!! Form::open() !!}

    <div>
        {!! Form::label('name', 'Name') !!}

        {!! Form::text('name', old('name', Auth::user()->name), ['class' => 'add-classes-here']) !!}
    </div>
    <br>
    <div>
        {!! Form::label('email', 'Email') !!}

        {!! Form::text('email', old('email', Auth::user()->email)) !!}
    </div>
    <br>
    <div>
        {!! Form::label('phone', 'Phone Number') !!}

        {!! Form::text('phone', old('phone', Auth::user()->phone)) !!}
    </div>
    <div>
        {!! Form::submit('Update Profile') !!}
    </div>


    {!! Form::close() !!}
@endsection