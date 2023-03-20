@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Create Data Penulis</h2>
    </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <div class="card-body">
<<<<<<< HEAD
    <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
=======
    <form action="{{ route('penulis.store') }}" method="post" enctype="multipart/form-data">
>>>>>>> 8be8c92f536db8bc54ea7a71883cab4de6ba1277

        @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penulis</strong>
                <input type="text" name="nama" class="form-control" placeholder="" autofocus>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat</strong>
                <input type="text" name="alamat" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telepon</strong>
                <input type="text" name="telepon" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="">
            </div>
        </div>

        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Simpan</button>
<<<<<<< HEAD
              <a href="{{ url('/index') }}" class="btn btn-warning">Kembali</a>
=======
              <a href="{{ route('penulis.index') }}" class="btn btn-warning">Kembali</a>
>>>>>>> 8be8c92f536db8bc54ea7a71883cab4de6ba1277
          </div>

</form>
</div>
@endsection