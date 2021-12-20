@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/penerimaan"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mt-2 mb-2 text-gray-800">Edit Penerimaan Barang</h1>
                </div>
                <div class="card-body">
                    <form action="/penerimaan/update/{{ $penerimaan->id }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="kode_user">Nama Pemesan</label>
                            <select class="form-control @error('kode_user') is-invalid @enderror" id="kode_user" name="kode_user" required>
                                @if($user->count())
                                    @foreach($user as $v)
                                        <option value="{{ $v->id }}" {{ $penerimaan->kode_user == $v->id ? 'selected="selected"' : '' }}>{{ $v->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('kode_user')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="kode_sup">Nama Supplier</label>
                            <select class="form-control @error('kode_sup') is-invalid @enderror" id="kode_sup" name="kode_sup" required>
                                @if($supplier->count())
                                    @foreach($supplier as $v)
                                        <option value="{{ $v->id }}" {{ $penerimaan->kode_sup == $v->id ? 'selected="selected"' : '' }}>{{ $v->nama_sup }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('kode_sup')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tgl_terima">Tanggal Penerimaan</label>
                            <input type="date" class="form-control @error('tgl_terima') is-invalid @enderror" id="tgl_terima" name="tgl_terima" placeholder="Tanggal Penerimaan" value="{{ $penerimaan->tgl_terima}}" required>
                            @error('tgl_terima')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="total_harga">Total Harga</label>
                            <input type="text" class="form-control @error('total_harga') is-invalid @enderror" id="total_harga" name="total_harga" placeholder="Total Harga" value="{{ $penerimaan->total_harga}}" required>
                            @error('total_harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_terima">Status Penerimaan</label>
                            <input type="text" class="form-control @error('status_terima') is-invalid @enderror" id="status_terima" name="status_terima" placeholder="Status Penerimaan" value="{{ $penerimaan->status_terima}}" required>
                            @error('status_terima')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
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