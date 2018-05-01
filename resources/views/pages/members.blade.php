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
<div class="form-div">
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

    <!--</div>
        <p class="members-p label">Logged in as:</p>
        <p class="members-p">{{ Auth::user()->name }}</p>
    </div>

    </div>
        <p class="members-p label">Email address:</p>
        <p class="members-p">{{ Auth::user()->email }}</p>
    </div>

    </div>
        <p class="members-p label">Phone Number:</p>
        <p class="members-p">{{ Auth::user()->phone }}</p>
    </div>-->
   
    <a href="/edit-profile" class="form-submit">Edit your profile</a>
</div>
@endsection