@extends('layouts.blank')
@section('title','Form Pasien')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  @if(session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif

  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Alert</strong>
    <br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
    <form action="{{ url('') }}" method="POST">
      @csrf
      @if(!empty($pasien))
        @method('PATCH')
      @endif
        <div class="form-group ">
            <label for="inputEmail4">Nama Spesialis</label>
            <input type="text" class="form-control" value="" id="inputEmail4" name="nama_spesialis" placeholder="Nama Spesialis">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
