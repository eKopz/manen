<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Models\Keranjang;

class CartController extends Controller
{
  public function index(Request $request)
  {
    Keranjang::create([
          'id_barang' => $request->product_id,
          '' => $request->nim,
          'jumlah' => $request->quantity
        ]);
    return redirect('/listkeranjang')->with('status', 'Data Keranjang berhasil ditambahkan!');
  }

  public function show()
  {
      $produk = DB::table('keranjang_produk')
                ->join('keranjang', 'keranjang_produk.id_keranjang', '=', 'keranjang.id')
                ->join('produk', 'keranjang_produk.id_produk', '=', 'produk.id')
                ->select('produk.*', 'keranjang_produk.jumlah','')
                ->where('keranjang.id_user', '=', Auth::user()->id)->get();
      return view('ecommerce.keranjang');
  }

  public function checkout()
  {

  }
}