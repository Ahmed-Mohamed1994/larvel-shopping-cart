<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/store', 'HomeController@store')->name('store');
Route::get('/products', 'ProductController@index')->name('products');
Route::delete('/product/{product}', 'ProductController@destroy')->name('removeProduct');
Route::put('/product/{product}', 'ProductController@update')->name('updateProduct');
Route::get('/add-to-cart/{product}', 'ProductController@add_to_cart')->name('addToCart');
Route::get('/shopping-cart', 'ProductController@show_cart')->name('showCart');

Route::get('/checkout', 'ProductController@checkout_cart')->name('checkoutCart');
Route::post('/charge', 'ProductController@charge')->name('chargeCart');

Route::get('/orders', 'OrderController@index')->name('orders');
