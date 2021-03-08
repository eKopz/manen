<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Keranjang;
use App\KeranjangProduk;
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

  public function get_province(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/province",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: 712c2123c474afbc1f472f9e574c887a"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response=json_decode($response,true);
      $data_pengirim = $response['rajaongkir']['results'];
      return $data_pengirim;
    }
  }

  public function get_city($id){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/city?&province=$id",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: 712c2123c474afbc1f472f9e574c887a"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response=json_decode($response,true);
      $data_kota = $response['rajaongkir']['results'];
      return json_encode($data_kota);
    }
  }

  public function get_subdistrict($id)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/subdistrict?city=$id",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: 712c2123c474afbc1f472f9e574c887a"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response=json_decode($response,true);
      $data_kec = $response['rajaongkir']['results'];
      return json_encode($data_kec);
    }
  }

  public function get_ongkir($origin, $destination, $weight, $courier)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/cost",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "origin=$origin&originType=city&destination=$destination&destinationType=city&weight=$weight&courier=$courier",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: 712c2123c474afbc1f472f9e574c887a"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $response=json_decode($response,true);
      $data_ongkir = $response['rajaongkir']['results'];
      return json_encode($data_ongkir);
    }
  }

  public function checkout()
  {
    $provinsi = $this->get_province();
    return view('ecommerce.checkout', compact('provinsi'));
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


      if ($keranjang->produk() == null) {
        $keranjang_produk = DB::table('keranjang_produk')->insert([
        'id_produk' => $produk->id,
        'id_keranjang' => $keranjang->id,
        'jumlah' => $request->jumlah
      ]);
        // $keranjang->produk()->attach($produk->id, [
        //   'jumlah' => $request->jumlah
        // ]);

      }
      $keranjang_produk = KeranjangProduk::where('id_produk', $produk->id)->where('id_keranjang', $keranjang->id)->first();


      if ($keranjang_produk->count() > 0) {
        $keranjang_produk->jumlah += $request->jumlah;

        $keranjang_produk->save();
      }

      // if ($keranjang->produk()->get()->contains($produk->id)) {
      //   $keranjang->produk()->updateExistingPivot($produk->id, [
      //     'jumlah' => $request->jumlah + $keranjang->produk()->where('id_produk', $produk->id)->first()->pivot->jumlah
      //   ]);
      // }

      return redirect('/listkeranjang');

  }

  // public function checkout(Request $request)
  // {
  //     $keranjang = Keranjang::where('id_user', Auth::user()->id)->first();
  //
  //     $pesanan = Pesanan::create([
  //       'id_user' => Auth::user()->id,
  //       'id_prov' => $request->id_prov,
  //       'id_kota' => $request->id_kota,
  //       'id_kecamatan' => $request->id_kecamatan,
  //       'status' => 1,
  //       'total' => 0,
  //       'bukti_pembayaran' => ''
  //     ]);
  //
  //     foreach ($keranjang->produk()->get() as $value) {
  //       $pesanan->produk()->attach($value->id, [
  //         'jumlah' => $keranjang->barang()->where('id_barang', $value->id)->first()->pivot->jumlah,
  //       ]);
  //
  //       $keranjang->produk()->detach($value->id);
  //     }
  //
  //     foreach ($pesanan->produk()->get() as $value) {
  //       $value->stok -= $value->pivot->jumlah;
  //
  //       $value->save();
  //     }
  // }
  public function show()
  {
    $keranjang = Keranjang::where('id_user',Auth::user()->id)->first();
    $keranjang_produk = KeranjangProduk::where('id_keranjang',$keranjang->id)->get();

    return view('ecommerce.keranjang', compact('keranjang','keranjang_produk'));
  }

}
