@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/historistok/index/{{ $barang->id }}"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-12 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Tambah Histori Stok</h1>
                        </div>
						<div class="card-body">
							<form action="{{ url('/historistok/store') }}" method="post">
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
                                    <label for="tgl_hs">Tanggal Update Histori</label>
                                    <input type="date" class="form-control @error('tgl_hs') is-invalid @enderror" id="tgl_hs" name="tgl_hs" placeholder="Tanggal Update Stok" required>
                                    @error('tgl_hs')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="update_stok_hs">Jumlah Stok Update</label>
                                    <input type="text" class="form-control @error('update_stok_hs') is-invalid @enderror" id="update_stok_hs" name="update_stok_hs" placeholder="Stok Update" required>
                                    @error('update_stok_hs')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" placeholder="Status" required>
                                    @error('status')
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
