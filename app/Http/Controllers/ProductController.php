<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests;
use Session;

class ProductController extends Controller
{
   /* public function po_bracelets(Request $request){
        $products = Product::where('id', '3');
       // $myCheckboxes = $request->input('filters');
        //dd($myCheckboxes);
        return view('pages.po-bracelets', ['products' => $products]);
    }*/

    public function show($slug){
        
        $category = Category::where('slug', $slug)->first();

        if ($category) {
            $products = Product::where('category_id', $category->id)->get();
            $image = $category->image_path; 
            $title = $category->name;
            $h2 = $category->name;
            //dd($category);
            return view('pages.show')
                ->with(compact('products'))
                ->with(compact('title'))
                ->with(compact('image'))
                ->with(compact('h2'));
        }
        
        return redirect()->back()->with('msg', 'No Category found.');

    }

    public function getCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('pages.index');
    }

   
   
    public function po_bracelets(){
        $products = Product::where('id', '3')->get();
        return view('pages.po-bracelets', ['products' => $products]);
    }

    public function po_brooches(){
        $products = Product::where('id', '5')->get();
        return view('pages.po-brooches', ['products' => $products]);
    }
   
    public function po_earrings(){
        $products = Product::where('id', '1')->get();
        return view('pages.po-earrings', ['products' => $products]);
    }

    public function po_necklaces(){
        $products = Product::where('id', '2')->get();
        return view('pages.po-necklaces', ['products' => $products]);
    }

    public function po_rings(){
        $products = Product::where('id', '4')->get();
        return view('pages.po-rings', ['products' => $products]);
    }

    public function po_sets(){
        $products = Product::where('id', '6')->get();
        return view('pages.po-sets', ['products' => $products]);
    }

    public function finds(){
        $products = Product::where('id', '7')->get();
        return view('pages.finds', ['products' => $products]);
    }
}
