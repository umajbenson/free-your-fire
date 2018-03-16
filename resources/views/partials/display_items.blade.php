@foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            <div class="figure">
                <img src="{{ $product->image_path_pro }}">
                
                <p id="price">${{ $product->price_pro }}</p>
                <p>{{ $product->name_pro }}</p>
                <button>Add To Cart</button>
            </div>
        @endforeach
    </div> <!--end .row -->
@endforeach