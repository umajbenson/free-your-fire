@extends('layouts.master')

@section('title')
    Change Password
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="300" alt="Row of crystals">
@endsection

@section('h2')
    <h2 class="master-h2">Change your password</h2>
@endsection

@section('content')
    @include('partials.show-messages')
        
    <div class="form-div">
        {!! Form::open() !!}

       <div>
            {!! Form::label('current_password', 'Current Password', ['class' => 'label']) !!}
            {!! Form::password('current_password', ['class' => 'text-field']) !!}
       </div>

        <br>
        <div>
            {!! Form::label('new_password', 'New Password', ['class' => 'label']) !!}
            {!! Form::password('new_password', ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
            {!! Form::label('new_password_confirmation', 'New Password Confirmation', ['class' => 'label']) !!}
            {!! Form::password('new_password_confirmation', ['class' => 'text-field']) !!}
        </div>

        {!! Form::submit('Change Password', ['class' => 'form-submit']) !!}

        {!! Form::close() !!}
    </div>
@endsection