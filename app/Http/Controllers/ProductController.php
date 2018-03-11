<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function po_bracelets(){
        $products = Product::all();
        return view('pages.po-bracelets', ['products' => $products]);
    }
}
