@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Create Data Peminjaman</h2>
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
      
      <form action="{{url('/store-peminjaman')}}" method="post" enctype="multipart/form-data">


        @csrf

       <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama Buku</strong>
                  </div>
                <div class="form-group" style="height: auto;">
                    <select class="js-example-basic-single" style="width: 100%;" name="id_buku" id="id_buku">
                    @foreach($buku as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                    </select>              
                  </div>
            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>nama anggota</strong>
                  </div>
                <div class="form-group" style="height: auto;">
                    <select class="js-example-basic-single" style="width: 100%;" name="id_anggota" id="id_anggota">
                    @foreach($anggota as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                    </select>
              </div>
             </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>tanggal pinjam</strong>
                  <input type="date" name="tanggal pinjam" class="form-control" placeholder="" id="datepicker">
<<<<<<< HEAD
=======
              </div>
>>>>>>> 138af61889673ac8ba551572dc58c69da4a0b4c5
          </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>tanggal kembali</strong>
                    <input type="date" name="tanggal kembali" class="form-control" placeholder="">
                </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>denda</strong>
                    <input type="text" name="denda" class="form-control" placeholder="">
                </div>
                </div>
          <div class="col-xs-12 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>status</strong>
                    <select type="status" class="form-control">
                        <option>Sedang dipinjam</option>
                        <option>Belum dikembalikan</option>
                    </select>
                </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <button type="submit" class="btn btn-primary">Simpan</button>

              <a href="{{ url('peminjaman') }}" class="btn btn-warning">Kembali</a>
        </div>
      <script>
          $(document).ready(function() {            
    
            $('#date').datepicker({                      
    
                format: 'yyyy-mm-dd',
    
                autoclose: true,
    
            }); 
    
          });
    
        </script>
      </form>

</div>
@endsection
