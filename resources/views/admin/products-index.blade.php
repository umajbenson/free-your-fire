@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Product List
@endsection

@section('h2')
    Products
@endsection

@section('image')
    <img src="/images/backgrounds/stars-bg-crop.jpg">
@endsection

@section('content')
    <table>
        <tr>
            <th>User name</th>
            <th>Email</th>
            <th>Admin</th>
            <th>Active</th>
            <th>Date created</th>
            <th>Last update</th>
            <th>Edit</th>
            <th>Delete</th>    
        </tr>
        
        @foreach($products as $product)
            
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->image_path }}</td>
                <td>{{ $product->paypal_button }}</td>
                <td>{{ $product->weight }}</td>
                <td>{{ $product->is_vintage }}</td>
                <td>{{ $product->is_precious }}</td>
                <td>{{ $product->is_gemstone }}</td>
                <td>{{ $product->is_rhinestone }}</td>
                <td>{{ $product->is_other }}</td>
                <td>{{ $product->is_active }}</td>         
                <td>{{ Carbon::parse($product->created_at)->format('m/d/Y') }}</td>
                <td>{{ Carbon::parse($product->updated_at)->format('m/d/Y') }}</td>
                <td><a href="/admin/products/edit/{{ $product->id }}">Edit this product</a></td>
                <td><a href="/admin/delete-product/{{ $product->id }}">Delete this product</a></td>
            </tr>
            
         @endforeach
    </table>
@endsection

                                                        
                                        

