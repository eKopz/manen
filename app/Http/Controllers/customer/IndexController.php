<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
  public function index()
  {
    $produk = DB::table('produk')->limit(6)->get();
    $buah = DB::table('produk')->where('id_kategori', '=', '2')->get();
    return view('ecommerce.home',compact('produk','buah'));
  }

  public function detail($id)
  {
    $detail = DB::table('produk')
              ->join('kategori', 'produk.id_kategori', '=', 'kategori.id')
              ->select('produk.*', 'kategori.nama as kategori')
              ->where('produk.id', '=', $id)->first();
    $related = DB::table('produk')->limit(8)->get();
    return view('ecommerce.detailProduk',compact('detail','related'));
  }

  public function list()
  {
    $produk = DB::table('produk')->paginate(12);
    return view('ecommerce.listProduk',compact('produk'));
  }
}
