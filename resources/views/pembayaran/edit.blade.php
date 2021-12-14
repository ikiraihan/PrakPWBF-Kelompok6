@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/pembayaran"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="row justify">
                <div class="col-xl-12 col-lg-12 col-md-9">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mt-2 mb-2 text-gray-800">Edit Pembayaran</h1>
                        </div>
                        <div class="card-body">
                            <form action="/pembayaran/update/{{ $pembayaran->id }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group mb-3">
                                    <label for="id_penerimaan">ID Penerimaan</label>
                                    <input type="text" class="form-control @error('id_penerimaan') is-invalid @enderror" id="id_penerimaan" name="id_penerimaan" placeholder="ID Penerimaan" value="{{ $pembayaran->id_penerimaan }}" required>
                                    @error('id_penerimaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tgl_bayar">Tanggal Pembayaran</label>
                                    <input type="date" class="form-control @error('tgl_bayar') is-invalid @enderror" id="tgl_bayar" name="tgl_bayar" placeholder="Tanggal Pembayaran" value="{{ $pembayaran->tgl_bayar}}" required>
                                    @error('tgl_bayar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="total_bayar">Total Pembayaran</label>
                                    <input type="text" class="form-control @error('total_bayar') is-invalid @enderror" id="total_bayar" name="total_bayar" placeholder="Total Pembayaran" value="{{ $pembayaran->total_bayar }}" required>
                                    @error('total_bayar')
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