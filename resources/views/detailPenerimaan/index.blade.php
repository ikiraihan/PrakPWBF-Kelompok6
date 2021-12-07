@extends('layouts.dashboard')

@section('container')
<a href="{{ url('/penerimaan') }}"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
<h1 class="h3 mb-2 text-gray-800">Detail Penerimaan</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/detailpenerimaan/create{{ $penerimaan->id }}" class="btn btn-success"> 
                <i class="fas fa-fw fa-plus"></i>
                Penerimaan
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
                            <th>Sub Total</th>
                            <th style="width: 1%;">Edit</th>
                            <th style="width: 1%;">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detterima as $data=>$v)
                            <tr>
                                <td class="text-wrap text-center">{{ $data+ 1 }}</td>
                                <td>{{ $v-> Barang -> nama_barang }}</td>
                                <td>{{ $v->jumlah_his }}</td>
                                <td>{{ $v->harga_his }}</td>
                                <td>{{ $v->sub_total }}</td>
                                <td class="text-wrap"><a href="/detailpenerimaan/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                <td class="text-wrap"><a href="/detailpenerimaan/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection