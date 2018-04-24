@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Admin Page
@endsection

@section('h2')
    Administrators
@endsection

@section('image')
    <img src="/images/crystals.jpg" width="1520" height="100">
@endsection

@section('content')
    <a class="admin-links" href="/admin/users">Manage Members</a>
    <a class="admin-links" href="/admin/products">Manage Products</a>
@endsection
