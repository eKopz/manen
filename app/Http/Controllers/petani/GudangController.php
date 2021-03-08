<?php

namespace App\Http\Controllers\petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Petani;
use App\Produk;
use App\Panen;
use App\PesananProduk;
use App\Gudang;

class GudangController extends Controller
{
    public function getListPanen()
    {
        $petani = Petani::where('id_user', Auth::user()->id)->first();
        $listProduk = Produk::all();
        $listPanen = Panen::where('id_petani',$petani->id)->orderBy('id','desc')->get();
        return view('petani.panen.list_panen', compact('listPanen', 'listProduk'));
    }

    public function getPeluang()
    {   
        $produk_pesanan = PesananProduk::distinct()->get(['id_produk']);

        $get_data = array();

        foreach ($produk_pesanan as $value) {
            $gudang = Gudang::join('panen', 'panen.id', '=', 'gudang.id_panen')
                    ->join('produk', 'produk.id', '=', 'panen.id_produk')
                    ->where('produk.id', $value->id_produk)
                    ->select('produk.*', 'gudang.jumlah as jumlah')
                    ->first();

            $data =  $gudang->jumlah - $value->jumlah;

            array_push($get_data, $data, $gudang);
        }

        return view('petani.peluang.peluang',compact('get_data')); 
    }
}
