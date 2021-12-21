@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/penerimaan"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-12 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="h6 mt-2 mb-2 text-gray-800">No. Penerimaan : {{ $detterima->id_terima }}</h4>
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Penerimaan Barang</h1>
                        </div>
						<div class="card-body">
							<form action="/detailpenerimaan/update/{{ $detterima->id }}" method="post">
								{{ csrf_field() }}
                                <div class="col-md-12 mb-3">
                                    <label for="id_terima">Nomor Penerimaan</label>
                                    <input type="text" class="form-control @error('id_terima') is-invalid @enderror" id="id_terima" name="id_terima" placeholder="No Penerimaan" value="{{ $detterima->id_terima }}" required>
                                    @error('id_terima')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
								<div class="col-md-12 mb-3">
                                    <label for="kode_barang">Nama Barang</label>
                                    <select class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang" name="kode_barang" required>
                                        @if($barang->count())
                                            @foreach($barang as $v)
                                            <option value="{{ $v->id }}" {{ $detterima->kode_barang == $v->id ? 'selected="selected"' : '' }}>{{ $v->nama_barang }}</option>  
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('kode_barang')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="jumlah_his">Jumlah Terima</label>
                                    <input type="text" class="form-control @error('jumlah_his') is-invalid @enderror" id="jumlah_his" name="jumlah_his" placeholder="Jumlah" value="{{ $detterima->jumlah_his}}" required>
                                    @error('jumlah_his')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="harga_his">Harga</label>
                                    <input type="text" class="form-control @error('harga_his') is-invalid @enderror" id="harga_his" name="harga_his" placeholder="Harga terima" value="{{ $detterima->harga_his}}" required>
                                    @error('harga_his')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
                            		@enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="sub_total">Total Harga</label>
                                    <input type="text" class="form-control @error('sub_total') is-invalid @enderror" id="sub_total" name="sub_total" placeholder="Harga Total" value="{{ $detterima->sub_total}}" required>
                                    @error('sub_total')
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
