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
                <th style="width: 180px">Tahun Terbit</th>
                <td>{{ $penerbit->tahun_terbit }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penulis</th>
                <td>{{ $penerbit->penulis }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Penerbit</th>
                <td>{{ $penerbit->penerbit }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Kategori</th>
                <td>{{ $penerbit->kategori }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Sinopsis</th>
                <td>{{ $penerbit->sinopsis }}</td>
            </tr>
            <tr>
                <th style="width: 180px">Sampul</th>
                <td>{{ $penerbit->sampul }}</td>
            </tr>
        </table>
        <footer class="mt-3">
            <a href="{{ route('penerbit.index') }}" class="btn btn-primary btn-sm">Kembali</a>
        </footer>
    </div>
</div>
</div>
@endsection