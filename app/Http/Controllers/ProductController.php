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

    public function show($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->first();
       
        if (isset($request->sortby)) {
            $image = $category->image_path;           ;
            $products = collect([]);
            $preciousMetals = Product::where('category_id', $category->id)->where('is_precious', true)->get();
            //dd($preciousMetals);
            $gemstones = Product::where('category_id', $category->id)->where('is_gemstone', true)->get();
            //dd($gemstones);
            $vintages = Product::where('category_id', $category->id)->where('is_vintage', true)->get();
            //dd($vintages);
            $rhinestones = Product::where('category_id', $category->id)->where('is_rhinestone', true)->get();
            // dd($rhinestones);
            $others = Product::where('category_id', $category->id)->where('is_other', true)->get();
            // dd($others);
            if ($request->preciousMetals == 'true') {
                $products = $products->merge($preciousMetals);
            }

            if ($request->gemstones == 'true') {
                $products = $products->merge($gemstones);
            }

            if ($request->vintages == 'true') {
                $products = $products->merge($vintages);
            }

            if ($request->rhinestones == 'true') {
                $products = $products->merge($rhinestones);
            }

            if ($request->others == 'true') {
                $products = $products->merge($others);
            }
            $products = $products->unique();
            $category = $category->name;

            return view('pages.show')
                ->with(compact('products'))
                ->with(compact('image'))
                ->with(compact('category'));
        } else {
            $category = Category::where('slug', $slug)->first();

            if ($category) {
                $products = Product::where('category_id', $category->id)->get();
                $image = $category->image_path;           
                $category = $category->name;
                //dd($category);
                return view('pages.show')
                    ->with(compact('products'))
                    
                    ->with(compact('image'))
                    ->with(compact('category'));
            }
        }
        

        
        
        return redirect()->back()->with('msg', 'No Category found.');

    }

    /*public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('pages.show');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('pages.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]); 
    }*/

   
   
    /*public function po_bracelets(){
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
    }*/
}
