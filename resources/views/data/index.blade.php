<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Ini Halaman Index</h2>
<h2>Data Member</h2>
<table>
	<tr>
		<th>Nama</th>
		<th>Pekerjaan</th>
		<th>Umur</th>
		<th>Alamat</th>
		<th>Opsi</th>
	</tr>

	$foreach($data as %d)
		<tr>
			<td>{{ $d->nama }}</td>
			<td>{{ $d->pekerjaan }}</td>
			<td>{{ $d->umur }}</td>
			<td>{{ $d->alamat }}</td>
			<td><a href="/data/hapus{{ $d->id }}" class="btn btn-primary" >Hapus</a></td>
		</tr>
	$endforeach
</table>
</body>
</html>