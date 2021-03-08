<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Keranjang;
use App\KeranjangProduk;
use App\PesananProduk;
use App\Pesanan;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
  public function index()
  {
    $pesanan = Pesanan::where('id_user',Auth::user()->id)->first();
    $pesanan_produk = PesananProduk::where('id_pesanan',$pesanan->id)->get();
    return view('ecommerce.status', compact('pesanan','pesanan_produk'));
  }
}
