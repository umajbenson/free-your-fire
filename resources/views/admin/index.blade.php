@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Admin Page
@endsection

@section('h2')
    <span id="admin-h2">Administrators</span>
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100">
@endsection

@section('content')
@include('partials.show-messages')
    <a class="admin-links" href="/admin/users">Manage Members</a>
    <a class="admin-links" href="/admin/products">Manage Products</a>
@endsection
