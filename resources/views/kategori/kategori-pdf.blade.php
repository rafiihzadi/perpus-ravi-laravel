<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
		<h5>Laporan Kategori PDF</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/"></a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
		<tr>
            <th>No</th>
            <th>Nama</th>
            <th>Opsi</th>
            
		</tr>
		</thead>
        <tbody>
			@php $i=1 @endphp
			@foreach($kategori as $value)
		<tr>
			<td>{{ $i++ }}</td>
            <td>{{ $value->nama }}</td>
            <td><img src="./image/{{ $value->image }}" width="150px"></td>
		</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>