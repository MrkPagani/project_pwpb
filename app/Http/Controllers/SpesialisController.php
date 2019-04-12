<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    public function index()
    {
      $data['spesialis'] = \App\SpesialisModel::get();

      return view('spesialis.home-spesialis', $data);
    }

    public function input(){
      return view('spesialis.form-spesialis');
    }

    public function store(Request $request)
    {
      $rule = [
        'nama_spesialis' => 'required|string',
      ];
      $this->validate($request,$rule);

      $input = $request->all();
      unset ($input['_token']);
      $status = \App\SpesialisModel::insert($input);

      if ($status) {
        return redirect('/spesialis')->with('success', 'Data Berhasil ditambahkan');
      } else {
        return redirect('/spesialis/input')->with('error','Data gagal ditambahkan');
      }
    }

    public function edit(Request $request, $id)
    {
      $data['spesialis'] = \app\SpesialisModel::find($id);
      return view('spesialis.form-spesialis', $data);
    }

    public function update(Request $request,$id)
    {
      $rule = [
        'nama_spesialis' => 'required|string',
      ];
      $this->validate($request,$rule);
      $input = $request->all();
      unset($input['_token']);
      unset($input['_method']);
      //kombawa

      $status = \app\SpesialisModel::where('id',$id)->update($input);

      if ($status) {
        return redirect('/spesialis')->with('success','Data berhasil diubah');
      } else {
        return redirect('/spesialis/input')->with('error','Data gagal diubah');
      }
    }

    public function destroy(Request $request, $id)
    {
      $status = \app\SpesialisModel::where('id',$id)->delete();

      if ($status) {
        return redirect ('/spesialis')->with('success','Data telah dihapus');
      } else {
        return redirect('/spesialis/input')->with('error','Data gagal dihapus');
      }
    }
}
