@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/barang"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mt-2 mb-2 text-gray-800">Edit Barang</h1>
                </div>
				<div class="card-body">
					<form action="/barang/update/{{ $barang->id }}" method="post">
						{{ csrf_field() }}
						<div class="form-group row">
                            <div class="col-sm-6">
								<label for="nama_barang">Nama Barang</label>
								<input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" placeholder="Nama Barang" value="{{ $barang->nama_barang }}" required>
								@error('nama_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
							</div>
							<div class="col-sm-6">
								<label for="harga_beli_barang">Harga Beli</label>
								<input type="text" class="form-control @error('harga_beli_barang') is-invalid @enderror" id="nama_barang" name="harga_beli_barang" placeholder="Harga Beli" value="{{ $barang->harga_beli_barang }}" required>
								@error('harga_beli_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                            	@enderror
							</div>
						</div>
						<div class="form-group row">
                            <div class="col-sm-6">
								<label for="id_jb">Jenis Barang &nbsp</label>
								<select class="form-control" id="id_jb" name="id_jb">
									@if($jenisbarang->count())
										@foreach($jenisbarang as $v)
											<option value="{{ $v->id }}" {{ $barang->id_jb == $v->id ? 'selected="selected"' : '' }}>{{ $v->jenis_barang }}</option>
										@endforeach
									@endif
								</select>
							</div>
							<div class="col-sm-6">
								<label for="harga_jual_barang">Harga Jual</label>
								<input type="text" class="form-control @error('harga_jual_barang') is-invalid @enderror" id="harga_jual_barang" name="harga_jual_barang" placeholder="Harga Jual" value="{{ $barang->harga_jual_barang }}" required>
								@error('harga_jual_barang')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                            	@enderror
							</div>
						</div>
						<div class="form-group row">
                            <div class="col-sm-6">
								<label for="stok_barang">Stok Barang</label>
								<input type="text" class="form-control @error('stok_barang') is-invalid @enderror" id="stok_barang" name="stok_barang" placeholder="Jumlah Stok" value="{{ $barang->stok_barang}}" required>
								@error('stok_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
							</div>
						</div>
						<div class="col-md-12 d-flex align-items-center justify-content-center mb-2 mt-3 ">
                            <input type="submit" class="btn btn-danger" value="Simpan Data">
                        </div>
					</form>
				</div>
			</div>
		</div>
	</main>
</div>
@endsection