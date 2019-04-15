@extends('layouts.blank')
@section('title','Data Pasien')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            <br>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session ('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-error">
                {{ session ('error') }}
            </div>
            @endif
        </div>

        <div class="card-header py-3">
            <a href="{{url('pasien/add-pasien')}}" class="btn btn-success btn-icon-split">
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
                            <th>No RM</th>
                            <th>Nama Pasien</th>
                            <th>Gender</th>
                            <th>Nama Penanggung Jawab</th>
                            <th colspan="2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pasien as $row)
                        <tr>
                            <td>{{isset($i) ? ++$i : $i = 1 }}</td>
                            <td>{{$row->no_rm}}</td>
                            <td>{{$row->nama_pasien}}</td>
                            <td>{{$row->gender}}</td>
                            <td>{{$row->penanggung_jawab}}</td>

                            <td>
                                <center>
                                    <a href="{{ url('/pasien/' . $row->id . '/edit' )}}" class="btn btn-warning btn-circle">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <form class="" action="{{ url('/pasien/' . $row->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-circle ml-1" type="submit" name="button">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </center>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection