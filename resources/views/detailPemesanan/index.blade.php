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
    <a href="/pemesanan"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
    <h1 class="h3 mb-2 text-gray-800">Detail Pemesanan</h1>
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/detailpemesanan/create{{ $pemesanan->id }}" class="btn btn-success"> 
                    <i class="fas fa-fw fa-plus"></i>
                    Barang
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: 1%;">No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th style="width: 1%;">Edit</th>
                                <th style="width: 1%;">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detpesan as $data=>$v)
                                <tr>
                                    <td class="text-wrap text-center">{{ $data+ 1 }}</td>
                                    <td>{{ $v-> Barang -> nama_barang }}</td>
                                    <td>{{ $v->jumlah_up }}</td>
                                    <td>{{ $v->harga_up }}</td>
                                    <td class="text-wrap"><a href="/detail-pemesanan/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                    <td class="text-wrap"><a href="/detail-pemesanan/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection