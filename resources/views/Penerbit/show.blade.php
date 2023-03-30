@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penerbit</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $penerbit->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $penerbit->alamat }}</td>
            </tr>
            <tr>
            <th style="width: 180px">No.Telepon</th>
                <td>{{ $penerbit->telepon }}</td>            
            </tr>
            <tr>
                <th style="width: 180px">Email</th>
                <td>{{ $penerbit->email }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Jumlah Buku </th>
                <td>{{ $penerbit->jumlah  }}</td>
            
            </tr>
        </table>
        <footer class="mt-3">
            <a href="{{ route('penerbit.index') }}" class="btn btn-primary btn-sm">Kembali</a>
        </footer>
    </div>
</div>
</div>
@endsection