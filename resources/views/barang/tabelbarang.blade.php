@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tabel Barang</h1>
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/barang/tambah" class="btn btn-success"> + Tambah Barang Baru</a>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis Barang</th>
                                        <th>Stok Barang</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $dataBarang)
                                    <tr>
                                        <td>{{ $dataBarang -> id }}</td>
                                        <td>{{ $dataBarang -> nama_barang }}</td>
                                        <td>{{ $dataBarang -> jenis_barang }}</td>
                                        <td>{{ $dataBarang -> harga_beli_barang }}</td>   
                                        <td>{{ $dataBarang -> harga_jual_barang }}</td>                                           
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection