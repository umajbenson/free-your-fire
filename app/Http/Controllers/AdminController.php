<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Role;
use App\Models\Category;
use App\User;
use App\Models\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersIndex()
    {
    $users = User::all();
    $products = Product::all();
    //dd($users);
        return view('admin.users-index')->with(compact('users'))->with(compact('products'));
    }


    public function editUser($id) {
        $user = User::where('id', $id)->first();
        $rolesArray = [];
        $roles = Role::all();

        foreach($roles as $role) {
            $rolesArray = $rolesArray + [$role->id => $role->name];
        }

        return view('admin.users-edit')->with(compact('user'))->with(compact('rolesArray'));
    }


    public function updateUser($id, UpdateUserRequest $request)
    {
        $user = User::where('id', $id)->first();
        $update = $user->update($request->except('_token'));

        if($update) {
            return back()->with('message', 'Successfully Updated');
        }
        dd($request);
    }


    public function deleteUser($id)
    {
        $user = User::where('id', $id)->first();
        $delete = User::destroy($id);

        if ($delete) {
            return back();
        }
        dd($user);
    }


    public function productsIndex(Request $request)
    {
        if ($request->search) {
            $products = $this->searchProducts($request->search);
        } else {
            $products = Product::all();
        }
        
        return view('admin.products-index')->with(compact('products'));
    }


    public function editProduct($id) {
        $product = Product::where('id', $id)->first();
        $categoriesArray = [];
        $categories = Category::all();

        foreach($categories as $category) {
        $categoriesArray = $categoriesArray + [$category->id => $category->name];
        }

        return view('admin.products-edit')->with(compact('product'))->with(compact('categoriesArray'));
    }


    public function updateProduct($id, UpdateProductRequest $request)
    {
        $product = Product::where('id', $id)->first();
        $update = $product->update($request->except('_token'));

        if($update) {
            return back()->with('message', 'Successfully Updated');
        }
        dd($request);
    }
   

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $delete = Product::destroy($id);

        if ($delete) {
            return back();
        }
       // dd($product);
    }

    private function searchProducts($search)
    {
        $products = Product::where('name', 'LIKE', '%'.$search.'%')->get();

        return $products;
    }

    public function submitSearch(Request $request)
    {
        //dd($request->queryString);
        return redirect('/admin/products?search=' . $request->queryString);
    }

    public function addProduct()
    {
        $categoriesArray = [];
        $categories = Category::all();

        foreach($categories as $category) {
        $categoriesArray = $categoriesArray + [$category->id => $category->name];
        }

        return view('admin.product-create')->with(compact('categoriesArray'));
    }

    public function storeProduct(StoreProductRequest $request)
    {
        $data = $request->except('_token');

        $product = Product::create($data);

        if ($product) {
            return back()->with('message', 'Product Added!');
        }

        dd('nope');
    }
}
