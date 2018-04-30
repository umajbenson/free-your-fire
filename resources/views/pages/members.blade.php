@extends('layouts.master')

@section('title')     
    Free Your Fire - Member Area
@endsection

@section('image')
<img class="hero-img" src="/images/about-photo.jpg" width="1520" height="300" alt="Necklace on amethyst geode">
@endsection

@section('h2')     
    <h2 class="master-h2"> Member Area</h2>
@endsection

@section('content')
    <table id="members-page-table">
        <tr>
            <td class="right-align">Logged in as:</td>
            <td class="left-align">{{ Auth::user()->name }}</td>
        </tr>
        <tr>
            <td class="right-align">Email Address:</td>
            <td class="left-align">{{ Auth::user()->email }}</td>
        </tr>
        <tr>
            <td class="right-align">Phone Number:</td>
            <td class="left-align">{{ Auth::user()->phone }}</td>
        </tr>
    </table>

   
    <a href="/edit-profile">Edit your profile</a>

@endsection