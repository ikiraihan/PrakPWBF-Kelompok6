@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/ukuran" class="btn btn-primary">Kembali</a>
            <div class="row justify">
                <div class="col-xl-8 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Edit Ukuran</h1>
                        </div>
						<div class="card-body">
							<form action="/ukuran/update/{{ $ukuran->id }}" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="ukuran">Ukuran</label>
									<input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Besar Ukuran" value="{{ $ukuran->ukuran }}">
								</div>
								<br/>
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