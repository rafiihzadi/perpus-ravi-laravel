@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penulis</h2>
    </div>

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-body">
        <div style="margin-bottom: 20px">
            <a href="{{url( 'create-penulis')}}" class="btn btn-primary btn-flat">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </a>
            <a href="{{ url('pdf') }}" class="btn btn-danger btn-flat">
                <i class="fa fa-file-pdf"></i> Export PDF
            </a>
            <a href="{{ url('export data') }}" class="btn btn-success btn-flat">
                <i class="fa fa-file-excel"></i> Export Excel
            </a>
        </div>
        <div style="overflow: auto">
            <table class="table table-bordered table-condensed">
                <tr>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Nama</th>
                    <th style="text-align:center;">Alamat</th>
                    <th style="text-align:center;">No.Telepon</th>
                    <th style="text-align:center;">Email</th>
                    <th style="text-align:center;">Jumlah Buku</th>
                    <th style="text-align:center">Opsi</th>
                    
                </tr>
                @foreach($penulis as $data)
                <tr>
                    <td style="text-align:center">{{ $data->iteration }}</td>
                    <td style="text-align:center">{{ $data->nama }}</td>
                    <td style="text-align:center">{{ $data->alamat }}</td>
                    <td style="text-align:center" style="text-align:center">{{ $data->telepon }}</td>
                    <td style="text-align:center">{{ $data->email }}</td>
                    <td style="text-align:center"></td>
                    <td style="text-align:center">
                        <a class="btn btn-info">Show</a>
                        <a class="btn btn-primary">Edit</a>
                        <a class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                
                @endforeach
                </tr>
                
            </table>
            
        </div>
    </div>
</div>
@endsection