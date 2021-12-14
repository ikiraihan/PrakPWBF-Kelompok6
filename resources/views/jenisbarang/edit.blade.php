@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/jenisbarang"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-8 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Edit Jenis Barang</h1>
                        </div>
						<div class="card-body">
							<form action="/jenisbarang/update/{{ $jenis_barang->id }}" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="jenis_barang">Jenis Barang</label>
									<input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang" name="jenis_barang" placeholder="Jenis Barang" value="{{ $jenis_barang->jenis_barang }}" required>
									@error('jenis_barang')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
								</div>
								<div class="col-md-12 d-flex align-items-center justify-content-center mb-2 mt-4">
									<input type="submit" class="btn btn-danger" value="Simpan Data">
								</div>
							</form>
						</div>	
					</div>
				</div>		
			</div>
		</div>
	</main>
</div>
@endsection