<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
   /* public function po_bracelets(Request $request){
        $products = Product::where('id_cat', '3');
       // $myCheckboxes = $request->input('filters');
        //dd($myCheckboxes);
        return view('pages.po-bracelets', ['products' => $products]);
    }*/

    public function show($id_cat){
        return view('pages.show');
    }

    public function po_bracelets(){
        $products = Product::where('id_cat', '3')->get();
        return view('pages.po-bracelets', ['products' => $products]);
    }

    public function po_brooches(){
        $products = Product::where('id_cat', '5')->get();
        
        return view('pages.po-brooches', ['products' => $products]);
    }
   
    public function po_earrings(){
        $products = Product::where('id_cat', '1')->get();
        return view('pages.po-earrings', ['products' => $products]);
    }

    public function po_necklaces(){
        $products = Product::where('id_cat', '2')->get();
        return view('pages.po-necklaces', ['products' => $products]);
    }

    public function po_rings(){
        $products = Product::where('id_cat', '4')->get();
        return view('pages.po-rings', ['products' => $products]);
    }

    public function po_sets(){
        $products = Product::where('id_cat', '6')->get();
        return view('pages.po-sets', ['products' => $products]);
    }

    public function finds(){
        $products = Product::where('id_cat', '7')->get();
        return view('pages.finds', ['products' => $products]);
    }
}
