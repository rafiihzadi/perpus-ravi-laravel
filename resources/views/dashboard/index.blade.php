@extends('layouts.main')

@section('content')

 <div class="content">
    <div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Rekap</h2>
    </div>

     <!-- Small boxes (Stat box) -->
    <div class="card-body">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->

            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $buku }}</h3>
                <p>Jumlah Buku</p>
              </div>

              <div class="icon">
                <i class="nav-icon fas fa-book"></i>
              </div>
              <a href="{{ route('buku.index') }}" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3></h3>
                <p>Jumlah Penerbit</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-building"></i>
              </div>
              <a href="#" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>
                <p>Jumlah Penulis</p>
              </div>

              <div class="icon">
                <i class="nav-icon fas fa-pencil-alt"></i>
              </div>
              <a href="#" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3></h3>
                <p>Jumlah Kategori</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-list"></i>
              </div>
              <a href="#" target="_blank" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                Grafik Buku Berdasarkan Penerbit
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="penerbit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                Grafik Buku Berdasarkan Penulis
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="penulis">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-header bg-primary">
                Grafik Buku Berdasarkan Kategori
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                           <div id="kategori">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






        
      
      
@endsection
  
  