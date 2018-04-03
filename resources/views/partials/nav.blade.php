<nav id="main-nav">
    <ul class="sm sm-mint">
            <li><a href="/" class="current">Home</a>
            <li><a href="/about">About</a></li>
        <li><a href="/handmade">Handmade Jewelry</a>
            <!--<ul>
                <li><a href="hm-earrings">Earrings</a></li>
                <li><a href="hm-necklaces">Necklaces</a></li>
                <li><a href="hm-bracelets">Bracelets</a></li>
                <li><a href="hm-rings">Rings</a></li>
                <li><a href="hm-brooches">Brooches</a></li>
                <li><a href="hm-sets">Jewelry Sets</a></li>
            </ul>-->
        </li>
        <li><a href="/preowned">Pre-owned Jewelry</a>
            <ul>
                <li><a href="/show/pre-owned-earrings">Earrings</a></li>
                <li><a href="/show/pre-owned-necklaces">Necklaces</a></li>
                <li><a href="/show/pre-owned-bracelets">Bracelets</a></li>
                <li><a href="/show/pre-owned-rings">Rings</a></li>
                <li><a href="/show/pre-owned-brooches">Brooches</a></li>
                <li><a href="/show/pre-owned-sets">Jewelry Sets</a></li>
            </ul> 
        </li>
        <li><a href="/show/five-dollar">$5 Finds</a></li>
        @if(Auth::user())
        <li><a href="/members">Members Area</a></li>
        <li class="right-links"><a href="/logout">Logout</a></li>
        <li class="right-links"><a href="/edit-profile">Welcome, {{ Auth::user()->name }}!</a></li>
        @if(Auth::user()->is_admin == true)
            <li class="right-links"><a href="/admin">Admin</a></li>
        @endif
        @else
        <li class="right-links"><a href="/register">Register</a></li>
        <li class="right-links"><a href="/login">Login</a></li>
        @endif
        <!--<li class="right-links"><span id="cart"><a href="/cart"><img src="/images/if_shopping-cart-small.png" width=20 > Cart</a></span>-->
        <!--<span id="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></li>-->

        <li class="right-links"><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
            ">
           
            <input type="image" id="view-cart" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="Paypal">
            
            
           <!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">-->
            <!--<span id="cart"><img src="/images/if_shopping-cart-small.png" width=20></span>-->
            </form>
        </li>   
    </ul>
</nav>