@extends('layouts.blank')
@section('title','Data Tempat Tidur')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kelola Data Tempat Tidur</h6>
        </div>


        <div class="card-header py-3">
            <a href="{{url('main-tempat-tidur/add')}}" class="btn btn-success btn-icon-split">
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
                            <th class="m-0 font-weight-bold text-primary"> No</th>
                            <th class="m-0 font-weight-bold text-primary"><i class="fas fa-thumbtack"></i> Kode Tempat Tidur</th>
                            <th class="m-0 font-weight-bold text-primary"> Nama Ruangan</th>
                            <th class="m-0 font-weight-bold text-primary"> Nama Gedung</th>
                            <th class="m-0 font-weight-bold text-primary"> Status</th>
                            <th class="m-0 font-weight-bold text-primary" colspan="2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>006</td>
                            <td>Ruangan melati</td>
                            <td>Gedung Cut Nyak Dien</td>
                            <td>Kosong</td>
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
