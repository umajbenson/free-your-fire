@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Product List
@endsection

@section('h2')
    Products
@endsection

@section('image')
    <img src="/images/amethyst.jpg">
@endsection

@section('content')
    <table>
        <tr>
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
    </table>
@endsection

                                                        
                                        

