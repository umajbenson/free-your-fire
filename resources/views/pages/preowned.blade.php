@extends('layouts.master')

@section('title')     
    Free Your Fire - Pre-owned Jewelry
@endsection

@section('image')
    <img class="hero-img" src="/images/about-photo.jpg" width="1520" height="300" alt="Necklace on amethyst geode">
@endsection

@section('h2')     
    <h2 class="master-h2" id="pre-owned-h2">pre-owned jewelry</h2>
@endsection

@section('content')

<div>
    <div class="row">
        <div>
            <a href="/show/pre-owned-earrings">
                <img src="/images/tashkent-panchpoya-earrings.jpg" alt="Earring photo">
                <p class="text-overlay">Earrings</p>
            </a>
        </div>
        <div>
            <a href="/show/pre-owned-necklaces">
                <img src="/images/necklace-with-winged-heart.jpg" alt="Necklace photo">
                <p class="text-overlay">Necklaces</p>
            </a>
        </div>
        <div>
            <a href="/show/pre-owned-bracelets">
                <img src="/images/preowned-bracelets.jpg" alt="Bracelet photo">
                <p class="text-overlay">Bracelets</p>
            </a>
        </div>
    </div>
    <div class="row">
        <div>
            <a href="/show/pre-owned-rings">
                <img src="/images/preowned-rings.jpg" alt="Ring photo">
                <p class="text-overlay">Rings</p>
            </a>
        </div>
        <div>
            <a href="/show/pre-owned-brooches">
                <img src="/images/preowned-brooches.jpg" alt="Brooch photo">
                <p class="text-overlay">Brooches</p>
            </a>      
        </div>
        <div>
            <a href="/show/pre-owned-sets">
                <img src="/images/preowned-jewelry-set.jpg" alt="Jewelry set photo">
                <p class="text-overlay">Jewelry Sets</p>
            </a>
        </div>
    </div>
</div>
@endsection

