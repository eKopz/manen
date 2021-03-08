<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Panen;
use Auth;

class PanenController extends Controller
{
    public function getListPanen()
    {
        $listPanen = Panen::where('id_petani', )->get();
    }
}
