<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dokterController extends Controller
{

  public function index()
  {
    $data['dokter'] = \App\DokterModel::get();

    return view('dokter.main-dokter', $data);
  }

  public function create()
  {
    return view('dokter.form-dokter');
    //ini edit
  }

  public function store(Request $request)
  { }

  public function edit($id)
  {
    $data['dokter'] = \DB::table('t_dokter')->find($id);
    return view('dokter.form-dokter', $data);
  }
}
