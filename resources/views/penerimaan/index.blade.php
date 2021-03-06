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
    <h1 class="h3 mb-2 text-gray-800">Penerimaan Barang</h1>
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/penerimaan/create" class="btn btn-success"> + &nbspPenerimaan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Penerimaan</th>
                                <th>Nama Penerima</th>
                                <th>Supplier</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th style="width: 1%;">Detail</th>
                                <th style="width: 1%;">Edit</th>
                                <th style="width: 1%;">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penerimaan as $data=>$v)
                                <tr>
                                    <td>{{ $v->id }}</td>
                                    <td>{{ $v->tgl_terima }}</td>
                                    <td>{{ $v->User->name }}</td>
                                    <td>{{ $v->Supplier->nama_sup }}</td>
                                    <td>{{ $v->total_harga }}</td>
                                    <td>{{ $v->status_terima }}</td>
                                    <td class="text-wrap"><a href="/detailpenerimaan/index/{{ $v->id }}" class="btn btn-warning">Show</a></td>
                                    <td class="text-wrap"><a href="/penerimaan/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                    <td class="text-wrap"><a href="/penerimaan/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection