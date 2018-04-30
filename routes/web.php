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

Route::get('/show/{slug}', 'ProductController@show')->name('pages.show');

Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/newsletter', 'ContactController@viewNewsletter')->name('contact.newsletter');
Route::post('/newsletter', 'ContactController@submitNewsletter')->name('contact.submit.newsletter');

Route::get('/members', 'PagesController@members');

Route::get('/cart', 'PagesController@cart');

Route::get('/login', 'LoginController@login');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/register', 'RegisterController@register');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');

Route::post('/filter-products', 'ProductController@filter')->name('products.filter');

Route::get('/cart/{id}', 'ProductController@getAddToCart')->name('product.cart');


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
    Route::get('/delete-product/{id}', 'AdminController@deleteProduct');
    
    Route::get('/users', 'AdminController@usersIndex');
    Route::get('/users/edit/{id}', 'AdminController@editUser')->name('users-edit'); 
    Route::post('/users/edit/{id}', 'AdminController@updateUser');
    Route::get('/products', 'AdminController@productsIndex');
    Route::get('/products/edit/{id}', 'AdminController@editProduct')->name('products-edit');
    Route::post('/products/edit/{id}', 'AdminController@updateProduct'); 
    Route::post('/products/search', 'AdminController@submitSearch');
    Route::get('/products/add-new', 'AdminController@addProduct');
    Route::post('/products/add-new', 'AdminController@storeProduct');
    
});

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function() {
    Route::get('/password/reset', 'Auth\ForgotPasswordController@requestForm')->name('reset-password');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('reset-email');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('/password/reset/', 'Auth\ResetPasswordController@reset');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/change-password', 'UserController@changePassword');
    Route::get('/edit-profile', 'UserController@getProfile');    
    Route::post('/edit-profile', 'UserController@updateProfile');
    Route::get('/product/like/{product_id}', 'ProductController@userLike');
    Route::get('/product/unlike/{product_id}', 'ProductController@userUnlike');
    Route::post('/change-password', 'UserController@submitChangePassword');
});
