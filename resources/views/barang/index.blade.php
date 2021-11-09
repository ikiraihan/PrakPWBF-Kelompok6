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
                                        <th style="width: 1%;">No</th>
                                        {{-- <th>ID</th> --}}
                                        <th>Nama Barang</th>
                                        <th>Jenis Barang</th>
                                        <th>Stok</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th style="width: 1%;">Edit</th>
				                        <th style="width: 1%;">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $dataBarang => $b)
                                    <tr>
                                        <td class="text-wrap text-center">{{ $dataBarang + 1 }}</td>
                                        {{-- <td>{{ $b -> id }}</td> --}}
                                        <td>{{ $b -> nama_barang }}</td>
                                        <td>{{ $b -> jenisBarang -> jenis_barang }}</td>
                                        <td>{{ $b -> stok_barang}}</td>
                                        <td>{{ $b -> harga_beli_barang }}</td>   
                                        <td>{{ $b -> harga_jual_barang }}</td>   
                                        <td class="text-wrap"><a href="/barang/edit/{{ $b->id }}" class="btn btn-primary">Edit</a></td>
				                        <td class="text-wrap"><a href="/barang/destroy/{{ $b->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection