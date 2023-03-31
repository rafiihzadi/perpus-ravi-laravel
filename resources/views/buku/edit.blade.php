@extends('layouts.main')

@section('content')
   <div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Edit Data Buku</h2>
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
<form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Buku:</strong>
                <input type="text" name="nama" class="form-control" value="{{ $buku->nama }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" class="form-control" value="{{ $buku->alamat }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Terbit:</strong>
                <input type="text" name="tahun terbit" class="form-control" value="{{ $buku->telepon }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis:</strong>
                <input type="text" name="penulis" class="form-control" value="{{ $buku->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
                <input type="text" name="penerbit" class="form-control" value="{{ $buku->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
                <input type="text" name="kategori" class="form-control" value="{{ $buku->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopsis:</strong>
                <input type="text" name="sinopsis" class="form-control" value="{{ $buku->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sampul:</strong>
                <input type="text" name="sampul" class="form-control" value="{{ $buku->email }}">
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('buku.index') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>

</form>
@endsection