<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Karma|Michroma|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Andika|Athiti|Barlow+Semi+Condensed|Courgette|Cuprum|Englebert|Magra|Marvel|Maven+Pro|Montserrat|Open+Sans+Condensed:300|Philosopher|Sansita|Ubuntu+Condensed" rel="stylesheet">
    <!-- CSS links -->
    <link href="js/jquery-ui.min.css" rel="stylesheet">
    <link href="smartmenus/sm-core-css.css" rel="stylesheet">
    <link href="smartmenus/sm-mint.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- jQuery links -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="smartmenus/jquery.smartmenus.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/freeyourfire.js"></script>

    <title>@yield('title')</title>
    
</head>

<body>
<div id="wrapper">
<header>
    <div> 
        <h1>Free your Fire</h1>
        <h2>Asheville, North Carolina</h2>
    </div>
    
    <nav id="main-nav">
        <ul class="sm sm-mint">
            <li><a href="/" class="current">Home</a>
            <li><a href="about">About</a></li>
            <li><a href="handmade">Handmade Jewelry</a>
                <ul>
                    <li><a href="hm-earrings">Earrings</a></li>
                    <li><a href="hm-necklaces">Necklaces</a></li>
                    <li><a href="hm-bracelets">Bracelets</a></li>
                    <li><a href="hm-rings">Rings</a></li>
                    <li><a href="hm-brooches">Brooches</a></li>
                    <li><a href="hm-sets">Jewelry Sets</a></li>
                </ul>
            </li>
            <li><a href="preowned">Pre-owned Jewelry</a>
                <ul>
                    <li><a href="po-earrings">Earrings</a></li>
                    <li><a href="po-necklaces">Necklaces</a></li>
                    <li><a href="po-bracelets">Bracelets</a></li>
                    <li><a href="po-rings">Rings</a></li>
                    <li><a href="po-brooches">Brooches</a></li>
                    <li><a href="po-sets">Jewelry Sets</a></li>
                    </ul> 
            </li>
            <li><a href="finds">$5 Finds</a></li>
            <li class="right-links"><a href="register">Register</a></li>
            <li class="right-links"><a href="login">Login</a></li>
            <li class="right-links"><a href="cart"><span id="cart"><img src="images/if_shopping-cart-small.png" width=20></span> Cart</a> </li>
        </ul>
    </nav> 
</header> 

<main>
    @yield('content')
</main>
</div>
</body>
</html>
