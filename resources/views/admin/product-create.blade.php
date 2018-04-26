@extends('layouts.master', ['admin' => true])

@section('title')
    Free Your Fire - Products Add New
@endsection

@section('h2')
    Add a Product
@endsection

@section('image')
    <img src="/images/crystals.jpg" width="1520" height="100">
@endsection

@section('content') <div id="product-edit-form-div">
    @include('partials.show-messages')

        {!! Form::open(['id' => 'product-edit-form']) !!}

        <div>
        
        {!! Form::label('name', 'Product Name', ['id' => 'product-name', 'class' => 'label']) !!}

        {!! Form::text('name', old('name', isset($product) ? $product->name : ''), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('image', 'Image', ['class' => 'label']) !!}

        {!! Form::text('image_path', old('image_path', isset($product) ? $product->image_path : ''), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('description', 'Description', ['class' => 'label']) !!}

        {!! Form::textarea('description', old('description', isset($product) ? $product->description : ''), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('price', 'Price', ['class' => 'label']) !!}

        {!! Form::text('price', old('price', isset($product) ? $product->price : ''), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('paypal', 'Paypal Button ID', ['class' => 'label']) !!}

        {!! Form::text('paypal_button', old('paypal_button', isset($product) ? $product->paypal_button : ''), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('weight', 'Weight', ['class' => 'label']) !!}

        {!! Form::text('weight', old('weight', isset($product) ? $product->weight : ''), ['class' => 'text-field']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('category', 'Category', ['class' => 'select-label']) !!}

        {!! Form::select('category_id', $categoriesArray, isset($product) ? $product->category_id : 1, ['class' => 'select']) !!}
        </div>
    
        <br>
        <div>
        {!! Form::label('vintage', 'Vintage', ['class' => 'select-label']) !!}

        {!! Form::select('is_vintage', [1 => 'Yes', 0 => 'No'], isset($product) ? $product->is_vintage : 0, ['class' => 'select']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('precious', 'Precious', ['class' => 'select-label']) !!}

        {!! Form::select('is_precious', [1 => 'Yes', 0 => 'No'], isset($product) ? $product->is_precious : 0, ['class' => 'select']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('gemstone', 'Gemstone', ['class' => 'select-label']) !!}

        {!! Form::select('is_gemstone', [1 => 'Yes', 0 => 'No'], isset($product) ? $product->is_gemstone : 0, ['class' => 'select']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('rhinestone', 'Rhinestone', ['class' => 'select-label']) !!}

        {!! Form::select('is_rhinestone', [1 => 'Yes', 0 => 'No'], isset($product) ? $product->is_rhinestone : 0, ['class' => 'select']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('other', 'Other', ['class' => 'select-label']) !!}

        {!! Form::select('is_other', [1 => 'Yes', 0 => 'No'], isset($product) ? $product->is_other : 0, ['class' => 'select']) !!}
        </div>

        <br>
        <div>
        {!! Form::label('active', 'Active', ['class' => 'select-label']) !!}

        {!! Form::select('is_active', [1 => 'Yes', 0 => 'No'], isset($product) ? $product->is_active : 0, ['class' => 'select']) !!}
        </div>

        <br>
        <div>
        {!! Form::submit('Save', ['class' => 'form-submit']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection