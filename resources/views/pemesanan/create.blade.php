@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/pemesanan"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mt-2 mb-2 text-gray-800">Pemesanan Barang</h1>
                </div>
                <div class="card-body">
                    <form action="/pemesanan/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="user_id">Nama Pemesan</label>
                            <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id" required>
                                @if($user->count())
                                    @foreach($user as $v)
                                        <option value="" disabled selected hidden> Pemesan </option>
                                        <option value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('user_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="sup_id">Nama Supplier</label>
                            <select class="form-control @error('sup_id') is-invalid @enderror" id="sup_id" name="sup_id" required>
                                @if($supplier->count())
                                    @foreach($supplier as $v)
                                        <option value="" disabled selected hidden> Supplier </option>
                                        <option value="{{ $v->id }}">{{ $v->nama_sup }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('sup_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tgl_pesan">Tanggal Pemesanan</label>
                            <input type="date" class="form-control @error('tgl_pesan') is-invalid @enderror" id="tgl_pesan" name="tgl_pesan" placeholder="Tanggal Pemesanan" required>
                            @error('tgl_pesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="status_pesan">Status pesan</label>
                            <input type="text" class="form-control @error('status_pesan') is-invalid @enderror" id="status_pesan" name="status_pesan" placeholder="Status Pemesanan" required>
                            @error('status_pesan')
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