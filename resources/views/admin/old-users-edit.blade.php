@extends('layouts.master', ['admin' => true])

@section('h2')
    User Edit
@endsection

@section('content')
    {!! Form::open() !!}

    <div class="align-left">
       
    {!! Form::label('name', 'User Name', ['id' => 'user-name', 'class' => 'class-name']) !!}

    {!! Form::text('name', old('name', isset($user) ? $user->name : ''), ['class' => 'input-class']) !!}
    </div>

    <br>
    <div class="align-left">
    {!! Form::label('email', 'Email') !!}

    {!! Form::email('email', old('email', isset($user) ? $user->email : ''), []) !!}
    </div>
    

    <br>
    <div class="align-left">
    {!! Form::label('phone', 'Phone') !!}

    {!! Form::text('phone', old('phone', isset($user) ? $user->phone : ''), []) !!}
    </div> 
    

    <br>
    <div class="align-left">
    {!! Form::label('is_admin', 'Admin') !!}

    {!! Form::select('is_admin', [1 => 'Yes', 0 => 'No'], isset($user) ? $user->is_admin : 0) !!}
    </div>
    

    
    <div class="align-left">
    {!! Form::label('is_active', 'Active') !!}

    {!! Form::select('is_active', [1 => 'Yes', 0 => 'No'], isset($user) ? $user->is_active : 0) !!}
    </div>
    <br>
    <div>
    {!! Form::label('role_id', 'Role') !!}

    {!! Form::select('role_id', $rolesArray, isset($user) ? $user->role_id : 1) !!}
    </div>

    <div>
    {!! Form::submit('Update') !!}
    </div>

    {!! Form::close() !!}

    <a href="/admin/delete-user/{{ $user->id }}">DELETE THIS USER</a>
@endsection