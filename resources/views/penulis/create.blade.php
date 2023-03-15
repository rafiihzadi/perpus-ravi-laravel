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
                  <strong>alamat</strong>
                  <textarea class="form-control" style="height:150px" name="sinopsis" placeholder=""></textarea>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>No. Telepon</strong>
                    <input type="text" name="nama" class="form-control" placeholder="" autofocus>
                </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="text" name="nama" class="form-control" placeholder="" autofocus>
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