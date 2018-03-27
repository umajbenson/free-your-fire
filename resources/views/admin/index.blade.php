@extends('layouts.master', ['admin' => true])

@section('h2')
    Admin Page
@endsection

@section('p')
    @foreach($users as $user)
        @if($user->id != Auth::user()->id)
            <p>{{ $user->name }} | {{ $user->email }} | {{ Carbon\Carbon::parse($user->created_at)->format('m/d/Y') }} <a href="/admin/delete-user/{{ $user->id }}">DELETE THIS USER</a></p>
        @endif
    @endforeach
@endsection