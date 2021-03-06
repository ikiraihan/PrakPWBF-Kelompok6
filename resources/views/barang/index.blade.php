@extends('layouts.dashboard')

@section('container')
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span> 
    </button>
    </div>
    @endif
    @if (session()->has('successDelete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('successDelete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">&times;</span> 
    </button>
    </div>
    @endif
    <h1 class="h3 mb-2 text-gray-800">Barang</h1>
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/barang/create" class="btn btn-success"> + &nbspTambah Barang</a>
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
                                    <th>Detail Barang</th>
                                    <th>Histori Stok</th>
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
                                    <td>{{ $b -> JenisBarang -> jenis_barang }}</td>
                                    <td>{{ $b -> stok_barang}}</td>
                                    <td>{{ $b -> harga_beli_barang }}</td>   
                                    <td>{{ $b -> harga_jual_barang }}</td>   
                                    <td class="text-wrap"><a href="/detailbarang/index/{{ $b->id }}" class="btn btn-warning">Show</a></td>
                                    <td class="text-wrap"><a href="/historistok/index/{{ $b->id }}" class="btn btn-info">History</a></td>
                                    <td class="text-wrap"><a href="/barang/edit/{{ $b->id }}" class="btn btn-primary">Edit</a></td>
                                    <td class="text-wrap"><a href="/barang/destroy/{{ $b->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                        
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
@endsection