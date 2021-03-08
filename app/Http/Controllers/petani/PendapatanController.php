<?php

namespace App\Http\Controllers\petani;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Pendapatan;
use App\Petani;

class PendapatanController extends Controller
{
    public function getPendapatan(){
        $petani = Petani::where('id_user', Auth::user()->id)->first();
        $detailPendapatan = Pendapatan::where('id_petani',$petani->id)->get();
        return view('petani.pendapatan.list_pendapatan',compact('detailPendapatan'));
    }
}
