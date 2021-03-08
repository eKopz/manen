<?php

namespace App\Http\Controllers\petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\Panen;
use App\Petani;
use App\Gudang;
use Auth;

class PanenController extends Controller
{
    public function getListPanen()
    {
        $petani = Petani::where('id_user', Auth::user()->id)->first();
        $listProduk = Produk::all();
        $listPanen = Panen::where('id_petani', $petani->id)->orderBy('id','desc')->get();
        return view('petani.panen.list_panen', compact('listPanen', 'listProduk'));
    }

    public function getDetailPanen($id)
    {
        $panen = Panen::find($id);
        return view('petani.panen.detail_panen',compact('panen'));
    }


    public function addPanen(Request $request)
    {
        $petani = Petani::where('id_user', Auth::user()->id)->first();

        Panen::create([
            'id_petani' => $petani->id,
            'id_produk' => $request->id_produk,
            'jumlah' => $request->jumlah,
            'status' => 1
        ]);
        return redirect('/panen/list_panen')->with('alert-success', 'Berhasil tambah data !'); 
    }

    public function selesaiPanen($id)
    {
        $panen = Panen::find($id);
        $panen->status = 2;
        $panen->save();

        Gudang::create([
            'id_panen' => $panen->id,
            'jumlah' => $panen->jumlah,
            'status'=> 1]);

        return redirect('/panen/list_panen')->with('alert-success', 'Data berhasil diubah !'); 
    }

    public function batalPanen($id)
    {
        $panen = Panen::find($id);
        $panen->status = 3;
        $panen->save();
        return redirect('/panen/list_panen')->with('alert-success', 'Data berhasil diubah !'); 
    }
}
