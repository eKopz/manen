<?php

namespace App\Http\Controllers\petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function getProduk()
    {
        $listPanen = Produk::all();
        return view('panen.list_panen');
    }

}
