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
            <a href="{{url('create-peminjam')}}" class="btn btn-primary btn-flat">
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
                    <th style="text-align:center;">nama buku</th>
                    <th style="text-align:center;">nama anggota</th>
                    <th style="text-align:center;">tanggal pinjam</th>
                    <th style="text-align:center;">tanggal kembali</th>
                    <th style="text-align:center">denda</th>
                    <th style="text-align:center">status</th>
                    <th style="text-align:center">opsi</th>

                </tr>
                
                <tr>
                    <td style="text-align:center"></td>
                    <td style="text-align:center"></td>
                    <td style="text-align:center" style="text-align:center"></td>
                    <td style="text-align:center"></td>
                    <td style="text-align:center"></td>
                    <td style="text-align:center"></td>
                    <td style="text-align:center"></td>
                <td style="text-align:center">
                <form action=>
                    <a class="btn btn-info" href="">Show</a>
          
                    <a class="btn btn-primary" href="">Edit</a>
         
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">Delete</button>
                </form>
                </td>
                </tr>


            </table>
        </div>
    </div>
</div>
@endsection