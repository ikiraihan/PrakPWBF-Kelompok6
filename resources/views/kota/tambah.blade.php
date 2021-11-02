@extends('layouts.dashboard')

@section('container')
<a href="/kota" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/kota/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama_kecamatan">Nama Kota</label>
			<input type="text" class="form-control" id="nama_kota" name="nama_kota" placeholder="Nama Kota">
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
@endsection    
