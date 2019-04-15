@extends('layouts.blank')
@section('title','Data Ruangan')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    @if(session('success'))
    <div class="alert alert-primary mt-5 welcome ml-2" role="alert">
        <center><b> {{session('success')}}</b></center>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger mt-5 welcome ml-2" role="alert">
        <center><b> {{{session('error')}}}</b></center>
    </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Ruangan</h6>
        </div>

        <div class="card-header py-3">
            <button class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#tambah">
                <span class="icon text-white-50">
                    <i class="fas fa-plus pt-1"></i>
                </span>
                <span class="text">Tambah</span>
            </button>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Nama Gedung</th>
                            <th>Harga</th>
                            <th colspan="2">
                                <center>Action</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ruangan as $row)
                        <tr>
                            <td>1</td>
                            <td>{{$row->no_ruangan}}</td>
                            <td>Ruang {{$row->nama_ruangan}}</td>
                            <td>{{$row->nama_gedung}}</td>
                            <td>Rp. {{$row->harga}}</td>
                            <td>
                                <center>
                                    <button class="btn btn-warning btn-circle" data-toggle="modal" data-target="#editRuangan" data-id_ruangan="{{$row->id}}" data-no_ruangan="{{$row->no_ruangan}}" data-nama_ruangan="{{$row->nama_ruangan}}" data-id_gedung={{$row->id_gedung}} data-gedung="{{$row->nama_gedung}}" data-harga="{{$row->harga}}">
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <button data-toggle="modal" data-target="#deleteRuangan" data-id_ruangan="{{$row->id}}" data-nama_ruangan="{{$row->nama_ruangan}}" class="btn btn-danger btn-circle ml-1">
                                        <i class="fas fa-trash"></i>
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
<div class="modal fade" id="editRuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/data-ruangan/update')}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="hidden" id="id_ruangan" name="id_ruangan">

                        <label for="exampleFormControlInput1">No Ruangan</label>
                        <input type="text" class="form-control" placeholder="Masukkan No ruangan" name='no_ruangan' id="no_ruangan">
                        @if($errors->has('no_ruangan'))
                        <small id="emailHelp" class="form-text text-danger"><strong>{{$errors->first()}}</strong></small>
                        @endif

                        <label for="exampleFormControlInput1" class="mt-2">Nama Ruangan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama ruangan" name='nama_ruangan' id="nama_ruangan">
                        @if($errors->has('nama_ruangan'))
                        <small id="emailHelp" class="form-text text-danger"><strong>{{$errors->first()}}</strong></small>
                        @endif

                        <label for="exampleFormControlInput1" class="mt-2">Nama Gedung</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nama_gedung">
                            @foreach($gedung as $row)
                            <option value="{{$row->id}}" id="optionValue">{{$row->nama_gedung}}</option>
                            @endforeach
                        </select>

                        <label for="exampleFormControlInput1" class="mt-2">Harga Ruangan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Harga Ruangan" name='harga' id="harga">
                        @if($errors->has('harga'))
                        <small id="emailHelp" class="form-text text-danger"><strong>{{$errors->first()}}</strong></small>
                        @endif
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('data-ruangan/add')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" id="id_spesialis" name="id_spesialis">

                        <label for="exampleFormControlInput1">No Ruangan</label>
                        <input type="text" class="form-control" placeholder="Masukkan No ruangan" name='no_ruangan' id="no_ruangan">
                        @if($errors->has('no_ruangan'))
                        <small id="emailHelp" class="form-text text-danger"><strong>{{$errors->first()}}</strong></small>
                        @endif

                        <label for="exampleFormControlInput1" class="mt-2">Nama Ruangan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama ruangan" name='nama_ruangan' id="nama_ruangan">
                        @if($errors->has('nama_ruangan'))
                        <small id="emailHelp" class="form-text text-danger"><strong>{{$errors->first()}}</strong></small>
                        @endif

                        <label for="exampleFormControlInput1" class="mt-2">Nama Gedung</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nama_gedung">
                            @foreach($gedung as $row)
                            <option value="{{$row->id}}" id="optionValue">{{$row->nama_gedung}}</option>
                            @endforeach
                        </select>

                        <label for="exampleFormControlInput1" class="mt-2">Harga Ruangan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Harga Ruangan" name='harga' id="harga">
                        @if($errors->has('harga'))
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
<div class="modal fade" id="deleteRuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form action="{{url('/data-ruangan/delete')}}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="id_ruangan" name="id_ruangan">
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
@if(count($errors) > 0)
<script type="text/javascript">
    $(window).on('load', function() {
        $('#tambah').modal('show');
    });

    $(document).ready(function() {
        $('#tambah').modal({
            backdrop: 'static',
            keyboard: false
        });
    });
</script>
@endif
@endsection