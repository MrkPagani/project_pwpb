@extends('layouts.blank')
@section('title','Laporan Rawat Jalan')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Pendaftaran</h6>
        </div>


        <div class="card-header py-3">
            <a href="{{url('main-rawat-jalan/add')}}" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th> No Reg</th>
                            <th> No Rawat</th>
                            <th> No RekMed</th>
                            <th> Nama Pasien</th>
                            <th> Cara Masuk</th>
                            <th> Dokter Penanggung Jawab</th>
                            <th> PoliKlinik</th>
                            <th> Jenis Bayar</th>
                            <th colspan="2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>002</td>
                            <td>2017-12-04/006</td>
                            <td>00003</td>
                            <td>Udin Samosir</td>
                            <td>Rawat Jalan</td>
                            <td>Dr Sanjaya Kusumah</td>
                            <td>POLI GIGI</td>
                            <td>Transfer Bank</td>
                            <td>
                                <center>
                                    <a href="#" class="btn btn-warning btn-circle">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <a href="#" class="btn btn-danger btn-circle ml-1">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
