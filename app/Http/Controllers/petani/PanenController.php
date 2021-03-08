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
}
