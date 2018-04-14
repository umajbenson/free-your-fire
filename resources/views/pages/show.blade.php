@extends('layouts.products')

@section('category-title')     
    Free Your Fire - Pre-Owned {{ $category }}
@endsection

@section('image')     
    <img id="shop-image" src="{{ $image }}">   
@endsection
     
<?php 
if ($category != 'Five-Dollar') {?>
    @section('category-h2')
        Pre-owned {{ $category }}
    @endsection
<?php } 
else { ?>
    @section('category-h2')
        Five-dollar Finds
    @endsection    
<?php }
?>
