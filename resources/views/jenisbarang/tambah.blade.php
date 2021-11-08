@extends('layouts.dashboard')

@section('container')
<a href="/jenisbarang" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/jenisbarang/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="jenis_barang">Jenis Barang</label>
			<input type="text" class="form-control" id="jenis_barang" name="jenis_barang" placeholder="Jenis Barang">
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
@endsection    