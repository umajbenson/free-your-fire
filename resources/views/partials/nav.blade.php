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
        @else
        <li class="right-links"><a href="/register">Register</a></li>
        <li class="right-links"><a href="/login">Login</a></li>
        @endif
        <li class="right-links"><a href="/cart"><span id="cart"><img src="/images/if_shopping-cart-small.png" width=20></span> Cart</a> </li>
    </ul>
</nav>