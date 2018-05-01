@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - User Edit
@endsection

@section('h2')
    <h2 class="master-h2" id="admin-h2">Administrators - Edit Members</h2>
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100" alt="Row of crystals">
@endsection

@section('content')
    <div class="form-div">
        @include('partials.show-messages')
        {!! Form::open(['id' => 'user-edit-form']) !!}

        <div class="align-left">   
            {!! Form::label('name', 'User Name', ['id' => 'user-name', 'class' => 'label']) !!}
            {!! Form::text('name', old('name', isset($user) ? $user->name : ''), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div class="align-left">
            {!! Form::label('email', 'Email', ['class' => 'label']) !!}
            {!! Form::email('email', old('email', isset($user) ? $user->email : ''), ['class' => 'text-field']) !!}
        </div>
    
        <br>
        <div class="align-left">
            {!! Form::label('is_admin', 'Admin', ['class' => 'select-label']) !!}
            {!! Form::select('is_admin', [1 => 'Yes', 0 => 'No'], isset($user) ? $user->is_admin : 0, ['class' => 'select']) !!}
        </div>
        

        <br>
        <div class="align-left">
            {!! Form::label('is_active', 'Active', ['class' => 'select-label']) !!}
            {!! Form::select('is_active', [1 => 'Yes', 0 => 'No'], isset($user) ? $user->is_active : 0, ['class' => 'select']) !!}
        </div>

        <br>
        <div>
            {!! Form::label('role_id', 'Role', ['class' => 'select-label']) !!}
            {!! Form::select('role_id', $rolesArray, isset($user) ? $user->role_id : 1, ['class' => 'select']) !!}
        </div>

        <div>{!! Form::submit('Update', ['class' => 'form-submit']) !!}</div>

        {!! Form::close() !!}
    </div>

    <br>
    <a class="form-submit delete-submit" href="/admin/delete-user/{{ $user->id }}">Delete This User</a>
@endsection