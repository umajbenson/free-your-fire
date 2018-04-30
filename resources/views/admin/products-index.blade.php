@extends('layouts.master', ['admin' => true, 'productsSearch' => true])

@section('title')
    Free Your Fire - Product List
@endsection

@section('h2')
    <h2 class="master-h2" id="admin-h2">Administrators - Product List</h2>
@endsection

@section('image')
    <img class="hero-img" src="/images/crystals.jpg" width="1520" height="100" alt="Row of crystals">
@endsection

@section('content')
@include('partials.show-messages')

<div class="add-new"><a id="add-new" href="/admin/products/add-new">Add a new product</a></div>

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

                                                        
                                        

