@extends('layouts.blank')
@section('title','Form Rawat Jalan')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <form>
        @csrf

        @if(!empty($dokter))
        @method('PATCH')
        @endif
        <div class="form-group ">
            <label for="inputEmail4">No Reg</label>
            <input type="text" class="form-control" id="inputEmail4" name="no_reg" placeholder="No Registrasi">
        </div>
        <div class="form-group ">
            <label for="inputhp4">No Rawat</label>
            <input type="text" class="form-control" id="inputhp4" placeholder="No Rawat" name="no_rawat">
        </div>
        <div class="form-group ">
            <label for="inputhp4">No Rekap Medis</label>
            <input type="text" class="form-control" id="inputhp4" placeholder="No Rekap Medis" name="no_rkp_mds">
        </div>
        <div class="form-group ">
            <label for="inputhp4">Nama Pasien</label>
            <input type="text" class="form-control" id="inputhp4" placeholder="Nama Pasien" name="nm_pasien">
        </div>
        <div class="form-group">
            <label for="inputState">Cara Masuk</label>
            <select id="inputState" class="form-control" name="">
                <option selected>Pilih Cara Masuk</option>
                <option>Cek 1</option>
                <option>Cek 2</option>
            </select>
        </div>
        <div class="form-group ">
            <label for="inputhp4">Dokter Penanggung Jawab</label>
            <input type="text" class="form-control" id="inputhp4" placeholder="Nama Dokter Penanggung Jawab" name="penanggung">
        </div>
        <div class="form-group">
            <label for="inputState">PoliKlinik</label>
            <select id="inputState" class="form-control" name="">
                <option selected>POLI GIGI</option>   
                <option>POLI RAMBUT</option>
                <option>POLI KEPALA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inputState">Jenis Bayar</label>
            <select id="inputState" class="form-control" name="">
                <option selected>Trasnfer Bank</option>
                <option>BPJS</option>
                <option>Kartu Kredit</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
