@extends('layouts.master')

@section('title')     
    Free Your Fire - Contact
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100" alt="Row of crystals">
@endsection

@section('h2')     
    <h2 class="master-h2">contact</h2>
@endsection

@section('content')

    <div class="form-div">
        @include('partials.show-messages')

        {!! Form::open(['route' => 'contact.store']) !!}

        <div>
            {!! Form::label('name', 'Your Name', ['class' => 'label']) !!}
            {!! Form::text('name', null, ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
            {!! Form::label('email', 'E-mail Address', ['class' => 'label']) !!}
            {!! Form::text('email', null, ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
            {!! Form::label('message', 'Message', ['class' => 'label']) !!}
            {!! Form::textarea('msg', null, ['class' => 'text-field']) !!}
        </div>

        {!! Form::submit('Submit', ['class' => 'form-submit']) !!}

        {!! Form::close() !!}
    </div>

@endsection