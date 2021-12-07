@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="{{ url('/kota') }}"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-8 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Kota Baru</h1>
                        </div>
						<div class="card-body">
							<form action="{{ url('/kota/store') }}" method="post">
								{{ csrf_field() }}
								<div class="col-md-12 mb-3">
									<label for="nama_kota">Nama Kota</label>
									<input type="text" class="form-control" id="nama_kota" name="nama_kota" placeholder="Nama Kota">
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
