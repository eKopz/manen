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
Route::get('/list', 'customer\IndexController@list');

Route::get('/keranjang', 'customer\CartController@index');
Route::get('/listkeranjang', 'customer\CartController@show');
Route::get('/checkout', 'customer\CartController@checkout');
Route::get('province','customer\CartController@get_province')->name('province');
Route::get('/kota/{id}','customer\CartController@get_city');
Route::get('/kecamatan/{id}','customer\CartController@get_subdistrict');
Route::get('/origin={city_origin}&originType=city&destination={city_destination}&destinationType=city&weight={weight}&courier={courier}','customer\CartController@get_ongkir');

// Route::get('/','petani\PagesController@dashboard');
Route::get('/panen/list_panen','petani\PanenController@getListPanen');
Route::get('/petani/produk','petani\ProdukController@getProduk');
Route::get('/peluang/peluang','petani\PagesController@peluang');
Route::get('/transaksi/list_transaksi','petani\PagesController@list_transaksi');
Route::get('/pendapatan/list_pendapatan','petani\PagesController@list_pendapatan');
Route::get('/monitoring/monitoring','petani\PagesController@monitoring');
Route::get('/produk', 'HomeController@detail');
Route::get('/listProduk', 'HomeController@list');

Route::get('/petani', function () {
    return view('petani.coba');
})->middleware('petani')->name('petani');


Auth::routes();
