<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;

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
  // public function show()
  // {
  //     $produk = DB::table('keranjang_produk')
  //               ->join('keranjang', 'keranjang_produk.id_keranjang', '=', 'keranjang.id')
  //               ->join('produk', 'keranjang_produk.id_produk', '=', 'produk.id')
  //               ->select('produk.*', 'keranjang_produk.jumlah','')
  //               ->where('keranjang.id_user', '=', Auth::user()->id)->get();
  //     return view('ecommerce.keranjang');
  // }

}
