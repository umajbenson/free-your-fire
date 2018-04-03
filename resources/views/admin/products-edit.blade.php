@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Products Edit
@endsection

@section('h2')
    Edit Products
@endsection

@section('image')
    <img src="/images/backgrounds/stars-bg-crop.jpg">
@endsection

@section('content')
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
    {!! Form::label('is_admin', 'Admin', ['class' => 'label']) !!}

    {!! Form::select('is_admin', [1 => 'Yes', 0 => 'No'], isset($user) ? $user->is_admin : 0, ['class' => 'select']) !!}
    </div>
    

    <br>
    <div class="align-left">
    {!! Form::label('is_active', 'Active', ['class' => 'label']) !!}

    {!! Form::select('is_active', [1 => 'Yes', 0 => 'No'], isset($user) ? $user->is_active : 0, ['class' => 'select']) !!}
    </div>

    <br>
    <div>
    {!! Form::label('role_id', 'Role', ['class' => 'label']) !!}

    {!! Form::select('role_id', $rolesArray, isset($user) ? $user->role_id : 1) !!}
    </div>

    <br>
    <div>
    {!! Form::submit('Update', ['class' => 'user-edit-submit']) !!}
    </div>

    {!! Form::close() !!}

    <a class="user-edit-submit" href="/admin/delete-user/{{ $user->id }}">Delete This User</a>
@endsection