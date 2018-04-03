@extends('layouts.master')

@section('title')     
    Free Your Fire - Member Area
@endsection

@section('h2')     
    Member Area
@endsection

@section('content')
    <p>This page is for members only</p>
    <p>Logged in as {{ Auth::user()->name }}</p>
    <p>Email Address: {{ Auth::user()->email }}</p>
    <p>Phone Number: {{ Auth::user()->phone }}</p>
    <a href="/edit-profile">Edit your profile</a>
@endsection