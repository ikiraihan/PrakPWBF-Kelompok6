@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/supplier"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-8 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Edit Supplier</h1>
                        </div>
						<div class="card-body">
							<form action="/supplier/update/{{ $supplier->id }}" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="nama_sup">Nama Supplier</label>
									<input type="text" class="form-control" id="nama_sup" name="nama_sup" placeholder="Nama Supplier" value="{{ $supplier->nama_sup }}">
								</div>
								<div class="form-group">
									<label for="alamat_sup">Alamat Supplier </label>
									<input type="text" class="form-control" id="alamat_sup" name="alamat_sup" placeholder="Alamat Supplier" value="{{ $supplier->alamat_sup}}">
								</div>
								<div class="form-group">
									<label for="kode_kota">Kota Supplier</label>
									<select class="form-control" id="kode_kota" name="kode_kota">
										@if($kota->count())
											@foreach($kota as $v)
												<option value="{{ $v->id }}" {{ $supplier->kode_kota == $v->id ? 'selected="selected"' : '' }}>{{ $v->nama_kota }}</option>
											@endforeach
										@endif
									</select>
								</div>
								<div class="form-group">
									<label for="telp_sup">No. Telepon</label>
									<input type="text" class="form-control" id="telp_sup" name="telp_sup" placeholder="No. Telepon" value="{{ $supplier->telp_sup }}">
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