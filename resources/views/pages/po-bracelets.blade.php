@extends('layouts.master')

@section('title')     
    Free Your Fire - Pre-Owned Bracelets
@endsection

@section('content')
    <img id="shop-image" src="images/bracelets-cropped.jpg">
    <div id="main-wrapper"> 
        <h2>Pre-owned Bracelets</h2>

        <fieldset>
        <legend>Filters:</legend>   
            <label for="precious">Precious Metal</label>
            <input type="checkbox" name="filters" id="precious" value="yes">
            <label for="gemstone">Gemstone</label>
            <input type="checkbox" name="filters" id="gemstone" value="yes">
            <label for="vintage">Vintage</label>
            <input type="checkbox" name="filters" id="vintage" value="yes">
            <label for="rhinestone">Rhinestone</label>
            <input type="checkbox" name="filters" id="rhinestone" value="yes">
            <label for="costume">Costume</label>
            <input type="checkbox" name="filters" id="costume" value="yes">
        </fieldset>
        
            <!-- <p>filter by:</p>
            <select>
                <option value="hand-made">hand-made</option>
                <option value="preowned">preowned</option>
                <option value="vintage">vintage</option>
                <option value="precious">precious metal</option>
                <option value="gemstone">gemstone</option>
                <option value="rhinestone">rhinestone</option>
            </select>-->

        @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
            <div class="figure">
                <img src="{{ $product->image_path_pro }}">
                <p>{{ $product->name_pro }}</p>
                <p>{{ $product->price_pro }}</p>
                <p>Add To Cart</p>
            </div>
            <!--<div>
                <img src="images/mala.jpg" >
                <p>Crystal Mala</p>
                <p>$25</p>
                <p>Quick View</p>
            </div>
            <div>
                <img src="images/silver-anklet.jpg" >
                <p>Silver Anklet</p>
                <p>$25</p>
                <p>Quick View</p>
            </div>-->
            @endforeach
        </div> <!--end .row -->
        @endforeach

    <!-- <div class="row">
            <div class="figure">
                <img src="images/dandelion.jpg" >
                <p>Dandelion Wish Necklace</p>
                <p>$25</p>
                <p>Quick View</p>
            </div>
            <div>
                <img src="images/larry.jpg" >
                <p>Dandelion Wish Necklace</p>
                <p>$25</p>
                <p>Quick View</p>
            </div>
            <div>
                <img src="images/nancy.jpg" >
                <p>Dandelion Wish Necklace</p>
                <p>$25</p>
                <p>Quick View</p>
            </div>
        </div> --><!-- end .row -->
    
    </div> <!-- end #main-wrapper -->
@endsection