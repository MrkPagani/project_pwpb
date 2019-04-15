@extends('layouts.blank')
@section('title','Data Dokter')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>


        <div class="card-header py-3">
            <a href="{{url('data-dokter/add-dokter')}}" class="btn btn-success btn-icon-split">
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
                            <th>No</th>
                            <th>Nama Dokter</th>
                            <th>No HP</th>
                            <th>Spesialis</th>
                            <th>No Izin Praktek</th>
                            <th>Alumni</th>
                            <th colspan="2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokter as $row)
                        <tr>
                            <td>{{isset($i) ? ++$i : $i = 1 }}</td>
                            <td>{{$row->nama_dokter}}</td>
                            <td>{{$row->no_hp}}</td>
                            <td>{{$row->id_spesialis}}</td>
                            <td>{{$row->no_izin_praktek}}</td>
                            <td>{{$row->alumni}}</td>
                            <td>
                                <center>
                                    <a href="{{url('/data-dokter/'.$row->id. '/edit')}}" class="btn btn-warning btn-circle">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                  <form class="" action="{{ url('/data-dokter/' . $row->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-circle ml-1" type="submit" name="button">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                  </form>
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
@endsection
