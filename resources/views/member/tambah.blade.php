<!DOCTYPE html>
<html>
<head>
	<title>Tambah data member</title>
</head>
<body>
<h3>Tambah Data Member</h3>

<form action="/member/store" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control"  name="nama">
	</div>

	<div class="form-group">
		<label>pekerjaan</label>
		<input type="text" class="form-control"  name="pekerjaan">
	</div>

	<div class="form-group">
		<label>umur</label>
		<input type="text" class="form-control"  name="umur">
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat"  ></textarea>
	</div>
	<div>
		<input type="submit" name="Simpan" class="btn btn-primary" >
	</div>
</form>
</body>
</html>