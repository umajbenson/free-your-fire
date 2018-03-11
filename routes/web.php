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

Route::get('/po-earrings', 'PagesController@po_earrings');

Route::get('/po-necklaces', 'PagesController@po_necklaces');

Route::get('/po-bracelets', 'ProductController@po_bracelets');

Route::get('/po-rings', 'PagesController@po_rings');

Route::get('/po-brooches', 'PagesController@po_brooches');

Route::get('/po-sets', 'PagesController@po_sets');

Route::get('/finds', 'PagesController@finds');

Route::get('/cart', 'PagesController@cart');

Route::get('/login', 'PagesController@login');

Route::get('/register', 'PagesController@register');



/*Route::get('/po-bracelets', function () {
    $products = DB::table('products_pro')->get();
    return $products;
   // return view('products', compact('products'));
});*/


/*Route::get('/about', function () {
    return view('pages.about');
});*/
