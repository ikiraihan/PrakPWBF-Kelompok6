@extends('layouts.dashboard')
@section('container')
 
	<a href="/kecamatan" class="btn btn-default"> Kembali</a>
		
	<br/>
	<br/>

	<form action="/kecamatan/update/{{ $kota->id }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="nama_kota">Nama Kota</label>
			<input type="text" class="form-control" id="nama_kota" name="nama_kota" placeholder="Nama Kota" value="{{ $ota->nama_kota }}">
		</div>
		<div class="col-md-12" style="text-align: right;">
			<input type="submit" class="btn btn-success" value="Simpan Data">
		</div>
	</form>
 
@endsection