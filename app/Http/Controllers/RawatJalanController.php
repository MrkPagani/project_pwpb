<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RawatJalanController extends Controller
{
  public function index(){
      return view('rawat-jalan.main-rawat-jalan');
  }

  public function input(){
      return view('rawat-jalan.form-rawat-jalan');
  }
}
