<!DOCTYPE html>
<html>
<head>
	<title>Tambah data member</title>
</head>
<body>
<h3>Tambah Data Member</h3>
@foreach ($member as $m)
<form action="/member/store" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control"  name="nama" value="{{$m->nama}}">
	</div>

	<div class="form-group">
		<label>pekerjaan</label>
		<input type="text" class="form-control"  name="pekerjaan" value="{{$m->pekerjaan}}" >
	</div>

	<div class="form-group">
		<label>umur</label>
		<input type="text" class="form-control"  name="umur" value="{{$m->umur}}" >
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<textarea class="form-control" name="alamat"> {{$m->alamat}} </textarea>
	</div>
	<div>
		<input type="submit" name="Simpan" class="btn btn-primary" >
	</div>
</form>
@endforeach
</body>
</html>