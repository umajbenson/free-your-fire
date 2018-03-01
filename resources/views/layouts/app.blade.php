<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
        <!--<link href="css/custom.css" rel="stylesheet">-->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <title>{{ config('app.name', 'FreeYourFire') }}</title>
    </head>

    <body>
    <header> 
        <h1>free<img id="triangle1" src="images/triangle-shadow.gif" width=17><span id="your">your</span><img id="triangle2" src="images/triangle-shadow.gif" width=17><span>f</span>ire</h1>
        <h2>Asheville, North Carolina</h2>
        
        <div id="top-nav-row">
            <nav id="login-nav">
                <ul>
                    <li><a href="#">Log in</a></li>
                    <li><a href="#">Register</a></li>
                </ul>  
            </nav>
            <nav id="main-nav">
                <ul>
                    <li><a href="/">Home</a>
                    <li><a href="about">About</a></li>
                    <li><a href="shop">Shop Jewelry</a></li>
                    <li><a href="finds">$5 Finds</a></li>
                </ul>
            </nav>
        </div>
        
        <img id="hero" src="images/banner-photo-crop1.jpg"> 
    </header>
    
    <main>
         @yield('content')
    </main>
    </body>
</html>
