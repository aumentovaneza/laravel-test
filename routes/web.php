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

Auth::routes();

Route::get('/', function(){
  return View::make('welcome');
})->middleware('auth');

Route::get('products', 'ProductController@index');

Route::get('cart/{id}', 'ProductController@cart')->name('cart');

Route::get('checkout', 'ProductController@checkout')->name('checkout');

Route::get('specials', 'ProductController@specials');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('review','ReviewController');
