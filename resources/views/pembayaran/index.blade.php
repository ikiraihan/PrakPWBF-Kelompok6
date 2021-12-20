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
    <h1 class="h3 mb-2 text-gray-800">Pembayaran Barang</h1>
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @if (auth()->User()->id_role=="1")
            <div class="card-header py-3">
                <a href="/pembayaran/create" class="btn btn-success"> + &nbspPembayaran</a>
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Pembayaran</th>
                                <th>Kode Penerimaan</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Total Pembayaran</th>
                                <th>Bukti Pembayaran</th>
                                @if (auth()->User()->id_role=="1")
                                <th style="width: 1%;">Edit</th>
                                <th style="width: 1%;">Hapus</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembayaran as $data=>$v)
                                <tr>
                                    <td>{{ $v -> id }}</td>
                                    <td>{{ $v -> id_penerimaan }}</td>
                                    <td>{{ $v -> tgl_bayar }}</td>
                                    <td>{{ $v -> total_bayar }}</td>
                                    <td class="text-wrap"><a href="/pembayaran/show/{{ $v->id }}" class="btn btn-warning">Show</a></td>
                                    {{-- <td><img src="{{ $v -> image }}"></td> --}}
                                    @if (auth()->User()->id_role=="1")
                                    <td class="text-wrap"><a href="/pembayaran/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                    <td class="text-wrap"><a href="/pembayaran/delete/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection