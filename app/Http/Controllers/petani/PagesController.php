<?php

namespace App\Http\Controllers\petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){
        return view('petani.coba');
    }

    public function list_panen(){
        return view('petani.panen.list_panen');
    }

    public function list_pendapatan(){
        return view('petani.pendapatan.list_pendapatan');
    }

    public function peluang(){
        return view('petani.peluang.peluang');
    }

    public function monitoring(){
        return view('petani.monitoring.monitoring');
    }

    public function list_transaksi(){
        return view('petani.transaksi.list_transaksi');
    }


}
