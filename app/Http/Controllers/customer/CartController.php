<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Keranjang;
use App\KeranjangProduk;
use App\PesananProduk;
use App\Pesanan;
use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
  public function index()
  {
    return view('ecommerce.keranjang');
  }

  public function checkout($id)
  {
    // $sub = $this->get_subdistrict();
    $keranjang_produk = KeranjangProduk::where('id_keranjang',$id)->get();
    return view('ecommerce.checkout',compact('keranjang_produk'));
  }

  public function addKeranjang(Request $request, $id)
  {
      $produk = Produk::find($id);
      $keranjang = Keranjang::where('id_user', Auth::user()->id)->first();

      if ($keranjang == null) {
        $keranjang = Keranjang::create([
          'id_user' => Auth::user()->id
        ]);
      }

<<<<<<< HEAD
=======

>>>>>>> a14288465a511f05c52bfda2c0ee3b1032697bcc
      if ($keranjang->produk() == null) {
        $keranjang_produk = DB::table('keranjang_produk')->insert([
        'id_produk' => $produk->id,
        'id_keranjang' => $keranjang->id,
        'jumlah' => $request->jumlah
      ]);
        // $keranjang->produk()->attach($produk->id, [
        //   'jumlah' => $request->jumlah
        // ]);
<<<<<<< HEAD
      }
      $keranjang_produk = KeranjangProduk::where('id_produk', $produk->id)->where('id_keranjang', $keranjang->id)->first();

=======

      }
      $keranjang_produk = KeranjangProduk::where('id_produk', $produk->id)->where('id_keranjang', $keranjang->id)->first();


>>>>>>> a14288465a511f05c52bfda2c0ee3b1032697bcc
      if ($keranjang_produk->count() > 0) {
        $keranjang_produk->jumlah += $request->jumlah;

        $keranjang_produk->save();
      }

      return redirect('/listkeranjang');

  }

  public function pesanan(Request $request)
  {
    $keranjang = Keranjang::where('id_user', Auth::user()->id)->first();

    $keranjang_produk = KeranjangProduk::where('id_keranjang', $keranjang->id)->get();


    $pesanan = Pesanan::create([
      'id_user' => Auth::user()->id,
      'alamat' => $request->address,
      'notlp' => $request->notlp,
      'kodepos' => $request->kodepos,
      'status' => 1,
      'total' => $request->total,
      'bukti_pembayaran' => ''
    ]);

    foreach ($keranjang_produk as $value) {
      PesananProduk::create([
        'id_pesanan' => $pesanan->id,
        'id_produk' => $value->id_produk,
        'jumlah' => $value->jumlah
      ]);

      $value->delete();
    }

    return redirect('/pesanan');

  }
  public function show()
  {
    $keranjang = Keranjang::where('id_user',Auth::user()->id)->first();
    $keranjang_produk = KeranjangProduk::where('id_keranjang',$keranjang->id)->get();

    return view('ecommerce.keranjang', compact('keranjang','keranjang_produk'));
  }

  public function destroy($id)
  {
    DB::table('keranjang_produk')->where('id', '=', $id)->delete();
    // KeranjangProduk::destroy($id);
    return redirect('/listkeranjang')->with('status', 'Data Keranjang berhasil dihapus!');
  }

}
