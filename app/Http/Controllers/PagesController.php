<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function handmade(){
        return view('pages.handmade');
    }
    
    public function preowned(){
        return view('pages.preowned');
    }

    public function cart(){
        return view('pages.cart');
    }

    public function members(){
        return view('pages.members');
    }    
}
