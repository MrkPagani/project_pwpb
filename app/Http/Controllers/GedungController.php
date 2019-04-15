<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class GedungController extends Controller
{
    public function index()
    {
        $data['gedung'] = \App\Gedung::get();
        $dati = 0000;
        $data['random'] = "ID000" . rand(0, 1000);
        return view('gedung.main-gedung', $data);
    }

    public function store(Request $request)
    {
        $rule = [
            'nama_gedung' => 'required'
        ];

        $this->validate($request, $rule);

        $input = $request->all();
        $gedung = new \App\Gedung;

        $gedung->nama_gedung = $input['nama_gedung'];

        $status = $gedung->save();

        if ($status) {
            Alert::success('data berhasil di tambah!');
            return redirect('data-gedung')->with('berhasil');
        } else {
            Alert::error('data gagal di di tambah!');
            return redirect('data-gedung')->with('gagal');
        }
    }

    public function update(Request $request)
    {
        $rule = [
            'nama_gedung' => 'required'
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        $id = $input['id_gedung'];
        $gedung = \App\Gedung::find($id);
        $gedung->nama_gedung = $input['nama_gedung'];
        $status =  $gedung->update();
        if ($status) {
            Alert::success('data berhasil di edit!');
            return redirect('data-gedung')->with('berhasil');
        } else {
            Alert::error('data gagal di di edit!');
            return redirect('data-gedung')->with('gagal');
        }
    }

    public function destroy(Request $request)
    {
        $input = $request->all();

        $id = $input['id_gedung'];

        $gedung = \App\Gedung::find($id);

        $status = $gedung->delete();
        if ($status) {
            Alert::success('data berhasil di Hapus!');
            return redirect('data-gedung')->with('berhasil');
        } else {
            Alert::error('data gagal di di hapus!');
            return redirect('data-gedung')->with('gagal');
        }
    }
}
