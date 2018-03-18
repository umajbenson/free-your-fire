<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/handmade', 'PagesController@handmade');

Route::get('/preowned', 'PagesController@preowned');

Route::get('show/{id_cat}', 'ProductController@show');

Route::get('/po-earrings', 'ProductController@po_earrings');

Route::get('/po-necklaces', 'ProductController@po_necklaces');

Route::get('/po-bracelets', 'ProductController@po_bracelets');

Route::get('/po-rings', 'ProductController@po_rings');

Route::get('/po-brooches', 'ProductController@po_brooches');

Route::get('/po-sets', 'ProductController@po_sets');

Route::get('/finds', 'ProductController@finds');

Route::get('/members', 'PagesController@members');


Route::get('/cart', 'PagesController@cart');

Route::get('/login', 'LoginController@login');

Route::get('/register', 'RegisterController@register');



/*Route::get('/po-bracelets', function () {
    $products = DB::table('products_pro')->get();
    return $products;
   // return view('products', compact('products'));
});*/


/*Route::get('/about', function () {
    return view('pages.about');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

