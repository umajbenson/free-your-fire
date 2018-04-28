@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - User List
@endsection

@section('h2')
    <span id="admin-h2">Administrators</span>
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100">   
@endsection

@section('h3')
    Users
@endsection

@section('content')
<div class="table-div">
    <table id="user-table">
        <tr class="thead-row">
            <th>User name</th>
            <th>Email</th>
            <th>Admin</th>
            <th>Active</th>
            <th>Date created</th>
            <th>Last update</th>
            <th>Edit</th>
            <th>Delete</th>    
        </tr>
        
            @foreach($users as $user)
            @if($user->id != Auth::user()->id)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->is_admin == true ? 'Yes' : 'No' }}</td>
            <td>{{ $user->is_active == true ? 'Yes' : 'No' }}</td>
            <td>{{ Carbon::parse($user->created_at)->format('m/d/Y') }}</td>
            <td>{{ Carbon::parse($user->updated_at)->format('m/d/Y') }}</td>
            <td><a href="/admin/users/edit/{{ $user->id }}">Edit</a></td>
            <td><a href="/admin/delete-user/{{ $user->id }}">Delete</a></td>
        </tr>
            @endif
            @endforeach
    </table>
</div>
@endsection

                                                        
                                        

