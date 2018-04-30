@extends('layouts.master')

@section('title')     
    Free Your Fire - Pre-owned Jewelry
@endsection

@section('image')
    <img class="hero-img" src="/images/about-photo.jpg" width="1520" height="300">
@endsection

@section('h2')     
    <h2 class="master-h2" id="pre-owned-h2">pre-owned jewelry</h2>
@endsection

@section('content')

<p>These pieces are one of a kind, so if you like something it's a good idea to snatch it up! 
<div>
    <div class="row">
        <div>
            <a href="/show/pre-owned-earrings">
                <img src="/images/tashkent-panchpoya-earrings.jpg">
                <p class="text-overlay">Earrings</p>
            </a>
        </div>
        <div>
            <a href="/show/pre-owned-necklaces">
                <img src="/images/necklace-with-winged-heart.jpg">
                <p class="text-overlay">Necklaces</p>
            </a>
        </div>
        <div>
            <a href="/show/pre-owned-bracelets">
                <img src="/images/preowned-bracelet.jpg">
                <p class="text-overlay">Bracelets</p>
            </a>
        </div>
    </div>
    <div class="row">
        <div>
            <a href="/show/pre-owned-rings">
                <img src="/images/preowned-rings.jpg">
                <p class="text-overlay">Rings</p>
            </a>
        </div>
        <div>
            <a href="/show/pre-owned-brooches">
                <img src="/images/preowned-brooches.jpg">
                <p class="text-overlay">Brooches</p>
            </a>      
        </div>
        <div>
            <a href="/show/pre-owned-sets">
                <img src="/images/preowned-jewelry-set.jpg">
                <p class="text-overlay">Jewelry Sets</p>
            </a>
        </div>
    </div>
</div>
@endsection

