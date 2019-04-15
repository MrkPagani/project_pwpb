<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use phpDocumentor\Reflection\Types\This;

class RuanganController extends Controller
{
    public function index()
    {
        $data['gedung'] = \App\Gedung::orderBy('id', 'desc')->get();
        $data['ruangan'] = \DB::table('t_ruangan')
            ->join('t_gedung', 't_ruangan.id_gedung', '=', 't_gedung.id')
            ->select('t_ruangan.*', 't_gedung.nama_gedung')
            ->get();
        return view('ruangan.main-ruangan', $data);
    }

    public function store(Request $request)
    {
        $rule = [
            'no_ruangan' => 'Required',
            'nama_ruangan' => 'Required',
            'nama_gedung' => 'Required',
            'harga' => 'Required|numeric'
        ];

        $this->validate($request, $rule);

        $input = $request->all();

        $ruangan = new \App\Ruangan;
        $ruangan->no_ruangan = $input['no_ruangan'];
        $ruangan->nama_ruangan = $input['nama_ruangan'];
        $ruangan->id_gedung = $input['nama_gedung'];
        $ruangan->harga = $input['harga'];

        $status = $ruangan->save();

        if ($status) {
            Alert::success('Data Berhasil Di Tambahkan');
            return redirect('/data-ruangan')->with('success');
        } else {
            Alert::error('Data Gagal Di Tamabakan');
            return redirect('/data-ruangan')->wirh('Error');
        }
    }

    public function update(Request $request)
    {
        $rule = [
            'no_ruangan' => 'Required:unique:t_ruangan',
            'nama_ruangan' => 'Required',
            'nama_gedung' => 'Required',
            'harga' => 'Required|numeric'
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $ruangan = \App\Ruangan::find($input['id_ruangan']);
        $ruangan->no_ruangan = $input['no_ruangan'];
        $ruangan->nama_ruangan = $input['nama_ruangan'];
        $ruangan->id_gedung = $input['nama_gedung'];
        $ruangan->harga = $input['harga'];
        $status = $ruangan->update();

        if ($status) {
            Alert::success('Data Berhasil Di Edit');
            return redirect('/data-ruangan')->with('success');
        } else {
            Alert::error('Data Gagal Di Edit');
            return redirect('/data-ruangan')->wirh('Error');
        }
    }

    public function destroy(Request $request)
    {
        $input = $request->all();
        $id = $input['id_ruangan'];
        $ruangan = \App\Ruangan::find($id);
        $status = $ruangan->delete();
        if ($status) {
            Alert::success('Data Berhasil Di Hapus');
            return redirect('/data-ruangan')->with('success');
        } else {
            Alert::error('Data Gagal Di Hapus');
            return redirect('/data-ruangan')->wirh('Error');
        }
    }
}
