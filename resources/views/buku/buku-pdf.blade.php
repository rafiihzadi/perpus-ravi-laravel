<!DOCTYPE html>
<html>
<head>
<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>

	<title>Laporan PDF Buku</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Buku PDF</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/"></a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
		<tr>
			<th>No</th>
            <th>Judul Buku</th>
            <th>Tahun Terbit</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th width="100px">Sinopsis</th>
            <th>Sampul</th>
		</tr>
		</thead>
        <tbody>
			@php $i=1 @endphp
			@foreach($buku as $value)
		<tr>
			<td>{{ $i++ }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->tahun_terbit }}</td>
            <td>{{ @$value->penulis->nama }}</td>
            <td>{{ @$value->penerbit->nama }}</td>
            <td>{{ @$value->kategori->nama}}</td>
            <td>{{ $value->sinopsis }}</td>
			<img src="{{ asset('image/'.$value->sampul) }}" width="84px"></td>
		</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>