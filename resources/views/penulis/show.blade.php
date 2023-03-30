@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Penulis</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $penulis->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Alamat</th>
                <td>{{ $penulis->alamat }}</td>
            </tr>
            <tr>
                <th style="width: 180px">No.Telepon</th>
                <td>{{ $penulis->telepon }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Email</th>
                <td>{{ $penulis->email }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Jumlah Buku</th>
                <td>{{ $penulis->jumlah }}</td>
            </tr>
        </table>
        <footer class="mt-3">
            <a href="{{ route('penulis.index') }}" class="btn btn-primary btn-sm">Kembali</a>
        </footer>
    </div>
</div>
</div>
@endsection
