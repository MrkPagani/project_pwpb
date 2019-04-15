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
            <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#tambah">
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


@endsection
<!-- modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('spesialis/update')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="hidden" id="id_spesialis" name="id_spesialis">
                        <label for="exampleFormControlInput1">Nama Spesialis</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Spesialis" name='nama_spesialis' id="nama_spesialis">
                        @if($errors->has('nama_spesialis'))
                        <small id="emailHelp" class="form-text text-danger"><strong>{{$errors->first()}}</strong></small>
                        @endif
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    @if(count($errors)>0)
    <div class="">
        <strong>Perhatian</strong>
        <br>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('spesialis')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" id="id_spesialis" name="id_spesialis">
                        <label for="exampleFormControlInput1">Nama Spesialis</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Spesialis" name='nama_spesialis' id="nama_spesialis">
                        @if($errors->has('nama_spesialis'))
                        <small id="emailHelp" class="form-text text-danger"><strong>{{$errors->first()}}</strong></small>
                        @endif
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Modal delete-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <form action="{{url('/spesialis/delete')}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="id_spesialis" name="id_spesialis">
                    <button type="submit" class="btn btn-danger "> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

</script>
@section('js')
<script src="{{asset('js/modal.js')}}"></script>
@endsection