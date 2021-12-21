@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/detailbarang/index/{{ $barang->id }}"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-12 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Tambah Detail Barang</h1>
                        </div>
						<div class="card-body">
							<form action="{{ url('/detailbarang/store') }}" method="post">
								{{ csrf_field() }}
								<div class="col-md-12 mb-3">
                                    <label for="kode_bar">Nama Barang</label>
                                    <select class="form-control @error('kode_bar') is-invalid @enderror" id="kode_bar" name="kode_bar" required>
                                        <option value="" disabled selected hidden>Barang</option>
                                        <option value={{ $barang->id }}>{{ $barang->nama_barang }}</option>
                                    </select>
                                    @error('kode_bar')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="id_warna">Warna</label>
                                    <select class="form-control @error('id_warna') is-invalid @enderror" id="id_warna" name="id_warna" required>
                                        @if($warna->count())
                                            @foreach($warna as $v)
                                                <option value="" disabled selected hidden>Warna</option>
                                                <option value={{ $v->id }}>{{ $v->warna }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('id_warna')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="id_ukuran">Ukuran</label>
                                    <select class="form-control @error('id_ukuran') is-invalid @enderror" id="id_ukuran" name="id_ukuran" required>
                                        @if($ukuran->count())
                                            @foreach($ukuran as $v)
                                                <option value="" disabled selected hidden>Ukuran</option>
                                                <option value={{ $v->id }}>{{ $v->ukuran }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('id_ukuran')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
								<div class="col-md-12 d-flex align-items-center justify-content-center mb-2 mt-4 ">
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
