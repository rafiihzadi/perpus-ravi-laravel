@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Peminjam </h2>
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
            <a href="{{url('create-peminjaman')}}" class="btn btn-primary btn-flat">
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
                    <th style="text-align:center;">Nama Buku</th>
                    <th style="text-align:center;">Nama Anggota</th>
                    <th style="text-align:center;">Tanggal Pinjam</th>
                    <th style="text-align:center;">Tanggal Kembali</th>
                    <th style="text-align:center">Denda</th>
                    <th style="text-align:center">Status</th>
                    <th style="text-align:center">Opsi</th>

                </tr>
                @foreach($peminjaman as $data)
                <tr>
                <td style="text-align:center">{{ $loop->iteration }}</td>
                    <td style="text-align:center">{{ $data->nama_buku }}</td>
                    <td style="text-align:center" style="text-align:center">{{ $data->nama_anggota }}</td>
                    <td style="text-align:center">{{ $data->tanggal_pinjam }}</td>
                    <td style="text-align:center">{{ $data->tanggal_kembali }}</td>
                    <td style="text-align:center">{{ $data->denda}}</td>
                    <td style="text-align:center">{{ $data->status}}</td>
                <td style="text-align:center">

                <form action="{{ route('peminjaman.destroy', $data->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('peminjaman.show',$data->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('peminjaman.edit',$data->id) }}">Edit</a>
                   
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">Delete</button>
                </td>
                </tr>
                @endforeach
            </tr>
            
            </table>
        </div>
    </div>
</div>
@endsection