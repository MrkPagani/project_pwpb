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

  public function input()
  {
    return view('dokter.form-dokter');
    //ini edit
  }

  public function store(Request $request)
  {
    $rule = [
      'nama_dokter' => 'required',
      'no_hp' => 'required|numeric',
      'spesialis' => 'required',
      'no_izin_praktek' => 'required|numeric',
      'alumni' => 'required',
    ];
    $this->validate($request,$rule);
    $input = $request->all();
    unset($input['_token']);
    $status = \DB::table('t_dokter')->insert($input);

    if ($status) {
      return redirect('/data-dokter')->with('success','Data berhasil ditambahkan');
    } else {
      return redirect('/data-dokter/input')->with('error','Data gagal ditambahkan');
    }
  }

  public function edit($id)
  {
    $data['dokter'] = \DB::table('t_dokter')->find($id);
    return view('dokter.form-dokter', $data);

  }
}
