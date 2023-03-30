@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Buku</h2>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th style="width: 180px">Nama</th>
                <td>{{ $buku->nama }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Tahun Terbit</th>
                <td>{{ $buku->tahun_terbit}}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penulis</th>
                <td>{{ $buku->id_penulis}}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penerbit</th>
                <td>{{ $buku->id_penerbit}}</td>
            </tr>
            <tr>
                <th style="width: 180px">Kategori</th>
                <td>{{ $buku->id_kategori}}</td>
            </tr>
            <tr>
                <th style="width: 180px">Sinopsis</th>
                <td>{{ $buku->sinopsis}}</td>
            </tr>
            <tr>
                <th style="width: 180px">Sampul</th>
                <td>{{ $buku->sampul}}</td>
            </tr>
        </table>
        <footer class="mt-3">
            <a href="{{ route('buku.index') }}" class="btn btn-primary btn-sm">Kembali</a>
        </footer>
    </div>
</div>
</div>
@endsection