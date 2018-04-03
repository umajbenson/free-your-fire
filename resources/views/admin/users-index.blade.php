@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - User List
@endsection

@section('h2')
    Registered Users
@endsection

@section('image')
    <img src="/images/backgrounds/stars-bg-crop.jpg">
@endsection

@section('content')
    <table>
        <tr>
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
            <td><a href="/admin/users/edit/{{ $user->id }}">Edit this user</a></td>
            <td><a href="/admin/delete-user/{{ $user->id }}">Delete this user</a></td>
        </tr>
            @endif
            @endforeach
    </table>
@endsection

                                                        
                                        

