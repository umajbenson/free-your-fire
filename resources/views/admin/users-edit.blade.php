@extends('layouts.master', ['admin' => true])

@section('h2')
    User Edit
@endsection

@section('content')
    
    <form method="POST" action="{{ route('users-edit', ['id'=>$user->id]) }}">  
        @csrf
        <label for="name">User Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="phone">phone</label>
        <input type="text" name="phone" id="phone">
        <label for="admin">Admin</label>
        <select size="1" name="admin" id="admin">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <label for="active">Active</label>
        <select size="1" name="active" id="active">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <label for="role">Role</label>
        <select size="1" name="role" id="role">
            <option value="member">Member</option>
            <option value="customer">Customer</option>
            <option value="member/customer">Member/Customer</option>       
        </select>       
        <input id="submit" type="submit" value="Update">
    </form>
    <a href="/admin/delete-user/{{ $user->id }}">DELETE THIS USER</a>
@endsection 