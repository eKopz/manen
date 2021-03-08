<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
