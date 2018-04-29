@extends('layouts.master', ['admin' => true, 'productsSearch' => true])

@section('title')
    Free Your Fire - Product List
@endsection

@section('h2')
    <span id="admin-h2">Administrators</span>
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100">
@endsection

@section('h3')
    Products
@endsection

@section('content')
@include('partials.show-messages')
<a href="/admin/products/add-new">Add a new product</a>
<div class="table-div">
    <table id="product-table">
        <tr class="thead-row">
            <th>Product name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Active</th>
            <th>Date created</th>
            <th>Date updated</th>
            <th>Edit</th>
            <th>Delete</th>    
        </tr>
        @if($products->count() > 0)
        @foreach($products as $product)
            
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>${{ $product->price }}</td>
                <td><img src="{{ $product->image_path }}" width="100"></td>
                
                <td>{{ $product->is_active == true ? 'Yes' : 'No' }}</td>         
                <td>{{ Carbon::parse($product->created_at)->format('m/d/Y') }}</td>
                <td>{{ Carbon::parse($product->updated_at)->format('m/d/Y') }}</td>
                <td><a href="/admin/products/edit/{{ $product->id }}">Edit</a></td>
                <td><a href="/admin/delete-product/{{ $product->id }}">Delete</a></td>
            </tr>
            
         @endforeach
         @else
            <p>No Products found...</p>
         @endif
    </table>
</div>
@endsection

                                                        
                                        

