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
    <link href="/js/jquery-ui.min.css" rel="stylesheet">
    <link href="/smartmenus/sm-core-css.css" rel="stylesheet">
    <link href="/smartmenus/sm-mint.css" rel="stylesheet">
    <!--<link href="css/app.css" rel="stylesheet">-->
    <link href="/css/custom.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="{{asset('css/custom.css')}}">-->

    <!-- jQuery links -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/smartmenus/jquery.smartmenus.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/freeyourfire.js"></script>

    <title>@yield('title')</title> 
</head>

<body>
<div id="wrapper">
<header>
    @include('partials.header')
       
    @if(!isset($admin))    
        @include('partials.nav')
    @else
        @include('partials.admin-nav')
    @endif
</header> 

<main>
    @yield('image')
    
    <div id="master-wrapper">

        <h2 id="master-h2">@yield('h2')</h2>
        @yield('content')
    </div> <!-- end #master-wrapper -->
</main>

<footer>
    <hr>
    @include('partials.footer')
</footer>
</div>
</body>
</html>

