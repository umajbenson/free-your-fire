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

    public function po_earrings(){
        return view('pages.po-earrings');
    }

    public function po_necklaces(){
        return view('pages.po-necklaces');
    }

    /*public function po_bracelets(){
        return view('pages.po-bracelets');
    }*/

    public function po_rings(){
        return view('pages.po-rings');
    }

    public function po_brooches(){
        return view('pages.po-brooches');
    }

    public function po_sets(){
        return view('pages.po-sets');
    }

    public function finds(){
        return view('pages.finds');
    }

    public function cart(){
        return view('pages.cart');
    }

    public function members(){
        return view('pages.members');
    }

    /*public function register(){
        return view('pages.register');
    }*/
    
}
