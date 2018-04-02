@extends('layouts.master', ['admin' => true])

@section('h2')
    Admin Page
@endsection

@section('content')
    <a href="/admin/users">Users</a>
    <a href="/admin/products">Products</a>
@endsection
