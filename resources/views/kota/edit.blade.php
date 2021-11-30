@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/kota" class="btn btn-primary">Kembali</a>
            <div class="row justify">
                <div class="col-xl-8 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Edit Kota</h1>
                        </div>
						<div class="card-body">
							<form action="/kota/update/{{ $kota->id }}" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="nama_kota">Nama Kota</label>
									<input type="text" class="form-control" id="nama_kota" name="nama_kota" placeholder="Nama Kota" value="{{ $kota->nama_kota }}">
								</div>
								<div class="col-md-12 justify-content-center mb-2 mt-4 ">
									<input type="submit" class="btn btn-danger" value="Simpan Data">
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>		
		</div>
	<main>
</div>
@endsection