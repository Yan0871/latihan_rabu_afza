<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Data Member</h1>
<form action="/member/cari" method="get" class="form-inline" >
	<input type="text" class="form-control" name="cari">
	<input class="btn btn-primary ml-3"  type="submit" value="CARI" >
</form>

<br>
<a href="/member/tambah" class="btn btn-primary" >Member Baru</a>
<br>

<table class="table table-bordered table-striped" >
	<tr>
		<th>Nama</th>
		<th>Pekerjaan</th>
		<th>Umur</th>
		<th>Alamat</th>
		<th>Opsi</th>
	</tr>
	@foreach($member as $m)
		<tr>
			<td>{{ $m->nama }}</td>
			<td>{{ $m->pekerjaan }}</td>
			<td>{{ $m->umur }}</td>
			<td>{{ $m->alamat }}</td>
			<td>
				<a href="/member/edit/{{ $m->id }}">Edit</a>
				<a href="/member/hapus/{{ $m->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
</table>
</body>
</html>