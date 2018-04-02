@extends('layouts.products')

@section('category-title')     
    Free Your Fire - Pre-Owned {{ $category }}
@endsection

@section('image')     
    <img id="shop-image" src="{{ $image }}">   
@endsection
     
@section('category-h2')
    Pre-Owned {{ $category }}
@endsection