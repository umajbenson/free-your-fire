@extends('layouts.master')

@section('title')     
    Free Your Fire - About
@endsection

@section('image')
    <img class="hero-img" src="/images/about-photo.jpg" width="1520" height="300" alt="Necklace on amethyst geode">
@endsection

@section('h2')     
    <h2 class="master-h2">about</h2>
@endsection

@section('content')

<div class="flex" id="about-flex">
    <div id="flex-left">
        <p>At Free Your Fire, our mission is to connect people with objects that enhance their innate radiance and strengthen their inner voice. Currently this comes in the form of pre-owned and vintage jewelry, some of which has been in our family for many years. Soon we will also offer a limited selection of original handmade jewelry featuring precious metals and gemstones. Each of these stones has special qualities that can support and assist people in their daily lives. In the coming months, we plan to add a blog as well as inspirational music and books.</p>

        <p>We are a family-owned and operated business grown out of a love for creative expression and beautiful things. Each of us contributes to the business in our own way. Larry enjoys the treasure hunt, frequenting estate sales and auctions to search for vintage jewelry when he is not playing drums at a local music venue in his home town of Nashville, Tennessee. Aubrie creates unique pieces from natural materials, as well as acting as the website photographer. Uma is the website designer and developer and general head honcho.</p>

        <p>There is a growing movement among businesses and individuals to create a more conscious and caring world. Free Your Fire is very much a part of this movement, which requires a belief that prosperity and integrity can coexist in a powerful way. It is our commitment to grow our business with this belief as our guide, and we look forward to all that we will learn and share along the way.</p>
              
    </div>
    <div id="flex-right">
        <h3>Sign up for our newsletter!</h3>
         <p>Become a member to receive jewelry-care advice, wardrobe suggestions, gemstone info, new-product notifications, special promotions and more.</p>

        <a href="/newsletter" class="form-submit" id="signup">Sign Up</a>   
    </div>
</div>

@endsection