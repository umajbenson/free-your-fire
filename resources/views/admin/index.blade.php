@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Admin Page
@endsection

@section('h2')
    Administrators
@endsection

@section('image')
    <img src="/images/amethyst.jpg">
@endsection

@section('content')
    <a class="admin-links" href="/admin/users">Manage Members</a>
    <a class="admin-links" href="/admin/products">Manage Products</a>
@endsection
