@extends('layouts.dashboard')

@section('container')
<h1 class="h3 mb-2 text-gray-800">Pembayaran Barang</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/barang/create" class="btn btn-success"> + &nbspBukti Pembayaran</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 1%;">No</th>
                            {{-- <th>ID</th> --}}
                            <th>ID</th>
                            <th>Kode Penerimaan</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Total Pembayaran</th>
                            <th style="width: 1%;">Bukti Pembayaran</th>
                            <th style="width: 1%;">Edit</th>
                            <th style="width: 1%;">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection