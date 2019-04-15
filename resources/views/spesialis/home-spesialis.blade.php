@extends('layouts.blank')
@section('title','Data Spesialis')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>


        <div class="card-header py-3">

                <span class="icon text-white-50">
                    <i class="fas fa-plus justify-content-center mt-1"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Spesialis</th>
                            <th>Nama Spesiali</th>
                            <th colspan="2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($spesialis as $row)
                        <tr>
                            <td>1</td>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nama_spesialis}}</td>
                            <td>
                                <center>
                                    <button class=" btn btn-warning btn-circle" data-toggle="modal" data-target="#edit" data-spesialis="{{$row->nama_spesialis}}" data-id={{$row->id}}>
                                        <i class=" fas fa-user-edit"></i>
                                    </button>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete" data-id_spesialis="{{$row->id}}" data-spesialis="{{$row->nama_spesialis}}">
                                        <i class=" fas fa-trash"></i>
                                    </button>
                                </center>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

