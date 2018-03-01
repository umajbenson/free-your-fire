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

    public function shop(){
        return view('pages.shop');
    }

    public function finds(){
        return view('pages.finds');
    }

    public function blog(){
        return view('pages.blog');
    }
    
}
