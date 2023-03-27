@extends('layouts.main')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Tambah Buku</h2>
    </div>
    
    <div class="card-body">
      <form action="{{url('/update')}}" method="POST" enctype="multipart/form-data">
        @csrf

       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Judul Buku:</strong>
                  <input type="text" name="nama" class="form-control" placeholder="" autofocus>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Tahun Terbit:</strong>
                  <input type="text" name="tahun_terbit" class="form-control" placeholder="">
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="form-group">
                  <strong>Penulis:</strong>
                  <input type="text" name="tahun_terbit" class="form-control" placeholder="">
                </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Penerbit:</strong>
                  <input type="text" name="tahun_terbit" class="form-control" placeholder="">
                 </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Kategori:</strong>
                  <input type="text" name="tahun_terbit" class="form-control" placeholder="">
                </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Sinopsis:</strong>
              <textarea class="form-control" style="height:150px" name="sinopsis" placeholder=""></textarea>
          </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Image:</strong>
              <input type="file" name="image" class="form-control" placeholder="image">
          </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{url('/index')}}" class="btn btn-warning">Kembali</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection