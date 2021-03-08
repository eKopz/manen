<?php

namespace App\Http\Controllers\petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Petani;
use App\Produk;
use App\Panen;
use App\Pesanan;

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
        $pesanan = Pesanan::produk()->get();

        dd($pesanan);

        return view('/peluang/peluang',compact('')); 
    }
}
