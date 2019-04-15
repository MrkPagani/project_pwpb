@extends('layouts.blank')
@section('title','Form Tempat Tidur')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <form>
        @csrf

        @if(!empty($dokter))
        @method('PATCH')
        @endif
        <div class="form-group ">
            <label for="inputEmail4">Kode Tempat Tidur</label>
            <input type="text" class="form-control" id="inputEmail4" name="kd_tempat_tidur" placeholder="Kode Tempat Tidur">
        </div>
        <div class="form-group ">
            <label for="inputhp4">Nama Ruangan</label>
            <input type="text" class="form-control" id="inputhp4" placeholder="Nama Ruangan" name="nm_ruangan">
        </div>
        <div class="form-group ">
            <label for="inputhp4">Nama Gedung</label>
            <input type="text" class="form-control" id="inputhp4" placeholder="Nama Gedung" name="nm_gedung">
        </div>
        <div class="form-group">
            <label for="inputState">Status</label>
            <select id="inputState" class="form-control" name="">
                <option selected>Pilih Status Kamar</option>
                <option>Terisi</option>
                <option>Kosong</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
