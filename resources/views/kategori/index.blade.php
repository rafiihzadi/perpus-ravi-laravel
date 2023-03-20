@extends('layouts.main')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h2 class="card-title">Data Kategori</h2>
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
            <a href="{{url('create-kategori') }}" class="btn btn-primary btn-flat">
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
                    <th style="text-align:center">nama</th>
                    <th style="text-align:center">opsi</th>
                </tr>
                @foreach($kategori as $data)
                <tr>
                <td style="text-align:center">
                    <a class="btn btn-info">Show</a>
                    <a class="btn btn-primary">Edit</a>
                    <a class="btn btn-primary">Delete</a>
        
                </td>
                
            </tr>

            @endforeach
        </tr>

            </table>
        </div>
    </div>
</div>
@endsection