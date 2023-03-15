@extends('layouts.main')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Tambah Penulis</h2>
    </div>
    
    <div class="card-body">
      <form action="#" method="post" enctype="multipart/form-data">
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
                  <strong>Tahun Terbit:</strong>
                  <input type="text" name="tahun_terbit" class="form-control" placeholder="">
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="form-group">
                  <strong>Penulis:</strong>
              </div>
              <div class="form-group" style="height: auto;">
              <select class="js-example-basic-single" style="width: 100%;" name="id_penulis" id="id_penulis">
              
          </select>
          </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Penerbit:</strong>
              </div>
              <div class="form-group">
              <select class="js-example-basic-single" style="width: 100%;" name="id_penerbit" id="id_penerbit">
              <option disabled value>Pilih Penerbit</option>
              
          </select>
          </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Kategori:</strong>
              </div>
          <div class="form-group">
              <select class="js-example-basic-single" style="width: 100%;" name="id_kategori" id="id_kategori">
              <option disabled value>Pilih Kategori</option>
              
          </select>
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
              <a href="{{ url('buku') }}" class="btn btn-warning">Kembali</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection