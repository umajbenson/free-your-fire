@foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            <div class="figure">
                <a class='inline' href="#inline_content"><img src="{{ $product->image_path }}"></a>
                <p class="center-products">{{ $product->name }}</p>
                <p class="center-products">${{ $product->price }}</p>
                
                <!--<a href="{{ route('product.addToCart', ['id'=>$product->id]) }}">Add To Cart</a>-->
                <form id="paypal" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value={{ $product->paypal_button }}>
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>     
            </div>
            <div id="lightbox">
                <div id="inline_content" class="clearfix">
                    <img src="{{ $product->image_path }}">
                    <div class="lightbox-text">
                        <p id="lightbox-name"">{{ $product->name }}</p>
                        <p class="center-products">{{ $product->description }}</p>
                        
                        <p class="center-products">${{ $product->price }}</p>
                        
                        <!--<a href="{{ route('product.addToCart', ['id'=>$product->id]) }}">Add To Cart</a>-->
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value={{ $product->paypal_button }}>
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>     
                </div>
            </div>
            
        @endforeach
    </div> <!--end .row -->
@endforeach

