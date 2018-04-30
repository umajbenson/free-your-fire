@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Admin Page
@endsection

@section('h2')
    <h2 class="master-h2" id="admin-h2">administrators - Home</h2>
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100" alt="Row of crystals">
@endsection

@section('content')
@include('partials.show-messages')
    <a class="admin-links" href="/admin/users">Manage Members</a>
    <a class="admin-links" href="/admin/products">Manage Products</a>
@endsection
