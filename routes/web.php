<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'customer\IndexController@index');
Route::get('/produk/{id}', 'customer\IndexController@detail');
Route::get('/listProduk', 'customer\IndexController@list');

Route::get('/keranjang', 'CartController@index');
Route::get('/listkeranjang', 'CartController@show');
Route::get('/checkout', 'CartController@checkout');



Auth::routes();
