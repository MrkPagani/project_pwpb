<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasienController extends Controller
{
    public function index(){
      $data['pasien'] = \DB::table('t_pasien')
      ->get();
      return view('pasien.main-pasien',$data);
    }

    public function input(){
      return view('pasien.form-pasien');
      // kmkmkm
    }

    public function store(Request $request)
    {
      $rule = [
        'nama_pasien' => 'required|string',
        'gender' => 'required',
        'golongan_darah' => 'required',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required',
        'nama_ibu' => 'required|string',
        'status_menikah' => 'required',
      ];
      $this->validate($request,$rule);

      $input = $request->all();
      unset ($input['_token']);
      $status = \DB::table('t_pasien')->insert($input);

      if ($status) {
        return redirect('/pasien')->with('success', 'Data Berhasil ditambahkan');
      } else {
        return redirect('/pasien/input')->with('error','Data gagal ditambahkan');
      }
    }

    public function edit(Request $request, $id)
    {
      $data['pasien'] = \DB::table('t_pasien')->find($id);
      return view('pasien.form-pasien', $data);
    }

    public function update(Request $request,$id)
    {
      $rule = [
        'nama_pasien' => 'required|string',
        'gender' => 'required',
        'golongan_darah' => 'required',
        'tempat_lahir' => 'required|string',
        'tanggal_lahir' => 'required',
        'nama_ibu' => 'required|string',
        'status_menikah' => 'required',
      ];
      $this->validate($request,$rule);
      $input = $request->all();
      unset($input['_token']);
      unset($input['_method']);
      //kombawa

      $status = \DB::table('t_pasien')->where('id',$id)->update($input);

      if ($status) {
        return redirect('/pasien')->with('success','Data berhasil diubah');
      } else {
        return redirect('pasien/input')->with('error','Data gagal diubah');
      }
    }

    public function destroy(Request $request, $id)
    {
      $status = \DB::table('t_pasien')->where('id',$id)->delete();

      if ($status) {
        return redirect ('/pasien')->with('success','Data telah dihapus');
      } else {
        return redirect('/pasien/input')->with('error','Data gagal dihapus');
      }
    }
}
