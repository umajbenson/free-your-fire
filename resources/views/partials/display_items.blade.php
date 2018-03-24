@foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            <div class="figure">
                <img src="{{ $product->image_path }}">
                
                <p id="price">${{ $product->price }}</p>
                <p>{{ $product->name }}</p>
                <button>Add To Cart</button>
                <!--<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="PDMQBULL82TE6">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>-->
                    
            </div>
        @endforeach
    </div> <!--end .row -->
@endforeach