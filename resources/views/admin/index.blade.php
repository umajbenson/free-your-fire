@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Admin Page
@endsection

@section('h2')
    Administrators
@endsection

@section('image')
    <img src="/images/backgrounds/stars-bg-crop.jpg">
@endsection

@section('content')
    <a class="admin-links" href="/admin/users">Manage Users</a>
    <a class="admin-links" href="/admin/products">Manage Products</a>
@endsection
