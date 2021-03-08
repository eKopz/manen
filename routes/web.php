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
Route::get('/produk', 'customer\IndexController@detail');
Route::get('/listProduk', 'customer\IndexController@list');

Route::get('/keranjang', 'customer\CartController@index');

Route::get('/produk/{id}', 'customer\IndexController@detail');
Route::get('/listProduk', 'customer\IndexController@list');

Route::get('/keranjang', 'CartController@index');
Route::get('/listkeranjang', 'CartController@show');
Route::get('/checkout', 'CartController@checkout');

// Route::get('/','petani\PagesController@dashboard');
Route::get('/panen/list_panen','petani\PanenController@getListPanen');
Route::get('/panen/detail_panen/{id}','petani\PanenController@getDetailPanen');
Route::get('/panen/detail_panen/selesai/{id}','petani\PanenController@selesaiPanen');
Route::get('/panen/detail_panen/batal/{id}','petani\PanenController@batalPanen');
Route::post('/panen/list_panen/addPanen','petani\PanenController@addPanen');

Route::get('/petani/produk','petani\ProdukController@getProduk');

Route::get('/peluang/peluang','petani\GudangController@getPeluang');

Route::get('/transaksi/list_transaksi','petani\TransaksiController@getDetailtransaksi');

Route::get('/pendapatan/list_pendapatan','petani\PendapatanController@getPendapatan');

Route::get('/monitoring/monitoring','petani\PagesController@monitoring');

Route::get('/produk', 'HomeController@detail');
Route::get('/listProduk', 'HomeController@list');

Route::get('/keranjang', 'CartController@index');



Route::get('/petani', function () {
    return view('petani.coba');
})->middleware('petani')->name('petani');


Auth::routes();

