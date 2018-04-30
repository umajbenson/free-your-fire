@extends('layouts.products')

@section('category-title')     
    Free Your Fire - Pre-Owned {{ $category }}
@endsection

@section('image')     
    <img class="hero-img" width=1520 height=300 src="{{ $image }}">   
@endsection
     
<?php 
if ($category != 'Five-Dollar') {?>
    @section('category-h2')
        <h2>pre-owned {{ $category }}</h2>
    @endsection
<?php } 
else { ?>
    @section('category-h2')
        <h2>five-dollar finds</h2>
    @endsection    
<?php }
?>
