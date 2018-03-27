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

Route::get('/', 'PagesController@index')->name('pages.index');

Route::get('/about', 'PagesController@about');

Route::get('/handmade', 'PagesController@handmade');

Route::get('/preowned', 'PagesController@preowned');

Route::get('/show/{slug}', 'ProductController@show');

Route::get('/members', 'PagesController@members');

Route::get('/cart', 'PagesController@cart');

Route::get('/login', 'LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/register', 'RegisterController@register');

Route::get('/cart/{id}', 'ProductController@getCart')->name('product.cart');




/*Route::get('/po-bracelets', function () {
    $products = DB::table('products_pro')->get();
    return $products;
   // return view('products', compact('products'));
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin', 'AdminController@index')->name('admin');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', 'AdminController@index');
    Route::get('/delete-user/{id}', 'AdminController@deleteUser');
});
