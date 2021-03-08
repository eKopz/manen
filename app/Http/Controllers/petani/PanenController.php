<?php

namespace App\Http\Controllers\petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\Panen;

class PanenController extends Controller
{
    public function getListPanen()
    {
        $listProduk = Produk::all();
        $listPanen = Panen::all();
        return view('petani.panen.list_panen', compact('listPanen', 'listProduk'));
    }

    public function addPanen(Request $request)
    {
        Panen::create([
            'id_petani' => 1,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'status' => 1
        ]);
        return redirect('/panen/list_panen')->with('alert-success', 'Berhasil tambah data !'); 
    }
}
