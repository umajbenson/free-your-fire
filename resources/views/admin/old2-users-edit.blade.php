@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - User Edit
@endsection

@section('h2')
    Edit Registered Users
@endsection

@section('image')
    <img src="/images/backgrounds/stars-bg-crop.jpg">
@endsection

@section('content')
    
    <form id="user-edit-form" method="POST" action="{{ route('users-edit', ['id'=>$user->id]) }}">  
        @csrf
        <p>
            <label for="name">User Name</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label for="admin">Admin</label>
            <select size="1" name="admin" id="admin">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </p>
        <p>
            <label for="active">Active</label>
            <select size="1" name="active" id="active">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </p>
        <p>
            <label for="role">Role</label>
            <select size="1" name="role" id="role">
                <option value="member">Member</option>
                <option value="customer">Customer</option>
                <option value="member/customer">Member/Customer</option>       
            </select>
        </p>       
        <input id="submit" type="submit" value="Update">
    </form>
    <a href="/admin/delete-user/{{ $user->id }}">DELETE THIS USER</a>
@endsection 