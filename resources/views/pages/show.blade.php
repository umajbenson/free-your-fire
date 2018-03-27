@extends('layouts.products')

@section('title')     
    Free Your Fire - Pre-Owned {{ $title }}
@endsection

@section('image')     
    <img id="shop-image" src="{{ $image }}">
    
@endsection
     
@section('h2')
    Pre-Owned {{ $h2 }}
@endsection