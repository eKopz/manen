<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CobaCobaController extends Controller
{
  public function index()
  {
    return view('ecommerce.home');
  }

  public function detail()
  {
    return view('ecommerce.detailProduk');
  }

  public function list()
  {
    return view('ecommerce.listProduk');
  }
}
