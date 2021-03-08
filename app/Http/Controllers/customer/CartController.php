<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Keranjang;
use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
  public function index(Request $request)
  {
    // Keranjang::create([
    //       'id_barang' => $request->product_id,
    //       '' => $request->nim,
    //       'jumlah' => $request->quantity
    //     ]);
    // return redirect('/listkeranjang')->with('status', 'Data Keranjang berhasil ditambahkan!');

    $keranjang = Keranjang::where('id_user', Auth::user()->id)->first();

      $keranjang_produk = $keranjang->produk()->get();

      return view('ecommerce.keranjang', 'keranjang', 'keranjang_produk');
  }

  public function show()
  {
      $produk = DB::table('keranjang_produk')
                ->join('keranjang', 'keranjang_produk.id_keranjang', '=', 'keranjang.id')
                ->join('produk', 'keranjang_produk.id_produk', '=', 'produk.id')
                ->select('produk.*', 'keranjang_produk.jumlah','')
                ->where('keranjang.id_user', '=', Auth::user()->id)->get();

      $keranjang = Keranjang::where('id_user', Auth::user()->id)->first();

      $keranjang_produk = $keranjang->produk()->get();

      return view('ecommerce.keranjang', 'keranjang', 'keranjang_produk');
  }

  public function addKeranjang($id_user, Request $request)
  {
      $produk = Produk::find($request->id_produk);
      $keranjang = Keranjang::where('id_user', $id_user)->first();

      if ($request->jumlah > $produk->stok) {
          return redirect('/produk')->with('alert', 'jumlah produk melebihi stok !');
      }
      
      if ($keranjang == null) {
        $keranjang = Keranjang::create([
          'id_user' => $id_user
        ]);
      }

      if ($keranjang->produk()->get()->contains($produk->id)) {
        $keranjang->produk()->updateExistingPivot($produk->id, [
          'jumlah' => $request->jumlah + $keranjang->produk()->where('id_produk', $produk->id)->first()->pivot->jumlah
        ]);
      } else {
        $keranjang->produk()->attach($produk->id, [
          'jumlah' => $request->jumlah
        ]);
      }

      return redirect('/listkeranjang');

  }

  public function checkout()
  {

  }
}
