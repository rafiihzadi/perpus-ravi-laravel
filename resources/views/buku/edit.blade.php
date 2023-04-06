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
                <strong>Tahun Terbit:</strong>
                <input type="text" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis:</strong>
            </div>
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;" name="id_penulis" value="{{ old('nama',@$buku->id_penulis) }}">
                    <option disabled value>Pilih Penulis</option>
                    @foreach($penulis as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
            </div>
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;" name="id_penerbit" value="{{ old('nama',@$buku->id_penerbit) }}">
                    <option disabled value>Pilih Penerbit</option>
                    @foreach($penulis as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategori:</strong>
            </div>
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;" name="id_kategori" value="{{ old('nama',@$buku->id_kategori) }}">
                    <option disabled value>Pilih Kategori</option>
                    @foreach($penulis as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>        
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sinopsis:</strong>
                <input type="text" name="sinopsis" class="form-control" value="{{ $buku->sinopsis }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sampul:</strong>
                <input type="text" name="sampul" class="form-control" value="{{ $buku->sampul }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('buku.index') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>

</form>
@endsection