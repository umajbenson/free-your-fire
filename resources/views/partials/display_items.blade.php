@foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            <div class="figure">
                <a class='inline' href="#inline-content-{{ $product->id }}"><img src="{{ $product->image_path }}" alt="Product image"></a>
                <p class="center-products">{{ $product->name }}</p>
                <p class="center-products">${{ $product->price }}</p>
                
                <!--<a href="{ { route('product.addToCart', ['id'=>$product->id]) }}">Add To Cart</a>-->
                <form id="paypal" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value={{ $product->paypal_button }}>
                    <input type="image" src="/images/add-to-cart-button.png" border="0" name="submit" style="width: 134px; height: auto;" alt="PayPal - The safer, easier way to pay online!">
                    
                    </form>
                    <p>{{ $product->likeCount }} users like this product</p>
                @if(Auth::user())
                    @if($product->liked())
                        <p>LIKED!</p>
                        <a href="/product/unlike/{{ $product->id }}">UNLIKE</a>
                    @else
                        <a href="/product/like/{{ $product->id }}">LIKE</a>
                    @endif
                @else
                    <small>Register to like products!</small>
                @endif
                         
            </div>
            <div class="lightbox">
                <div id="inline-content-{{ $product->id }}" class="inline-content">
                    <div class="lightbox-photo">
                        <img src="{{ $product->image_path }}" alt="Product image">
                    </div>
                    <div class="lightbox-text">
                        <h3 class="lightbox-name">{{ $product->name }}</h3>
                        <p class="center-products">{{ $product->description }}</p>
                        
                        <p class="center-products">${{ $product->price }}</p>
                        
                        <!--<a href="{ { route('product.addToCart', ['id'=>$product->id]) }}">Add To Cart</a>-->
                        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value={{ $product->paypal_button }}>
                            <input type="image" src="/images/add-to-cart-button.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="/images/add-to-cart-button.png" width="1" height="1">
                        </form>
                    </div>     
                </div>
            </div>
            
        @endforeach
    </div> <!--end .row -->
@endforeach

