@extends('layouts.master')

@section('title')     
    Free Your Fire - Home
@endsection

@section('image')     
    <img class="hero-img" src="/images/banner-photo-crop1.jpg"> 
@endsection

 @section('h2')  
   Welcome  
@endsection

@if(env('PRODUCTION_MODE') == 'production')
    @section('content')
        @include('partials.show-messages')
        <div class="flex" id="home-flex">
            <div id="flex-left">
                <p>Free Your Fire is a treasure chest of unique items and ideas designed to enhance your individuality. As of our launch date in May 2018, our product selection consists exclusively of pre-owned jewelry. Many of these pieces are vintage items which have been collected from estates. Others are beautiful, fun and eclectic accessories that have been lightly worn.

                <p>We believe that our pre-owned items are both economical and self-expressive. It is our hope you will find something truly special for your jewelry wardrobe as you browse.</p>

                <p>Check back often, as we will soon be adding handmade gemstone jewelry which is both decorative and functional. These pieces focus on gemstone qualities such as healing, protection, and strength to assist you in your daily life. Each piece comes with a guide to help you maximize its benefits.</p>
                
                <p>If you would like to be notified of the arrival of our handmade jewelry line, <a class="link-hover" href="/register"><em>register as a member</em></a> and be sure the box is checked to sign up for our newsletter. You will also receive lots of useful information about our products and related topics.</p>
            </div>

            <div id="flex-right">
                <h3>Sign up for our newsletter!</h3>
                <p>Become a member to receive jewelry-care advice, wardrobe suggestions, gemstone info, new-product notifications, special promotions and more.</p>

                <a href="/register"><button type="button" id="register">Sign Up</button></a>   
            </div>
        </div>
    @endsection

@else
    @section('content')

        <p>This site is currently under construction. Please visit us on our launch date, May 30, 2018</p>
        
    @endsection

@endif
