@extends('layouts.dashboard')

@section('container')
<h1 class="h3 mb-2 text-gray-800">Detail Pemesanan</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/detailpemesanan/create{{ $pemesanan->id }}" class="btn btn-success"> + &nbspBarang</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Pemesanan</th>
                            <th>Kode Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th style="width: 1%;">Edit</th>
                            <th style="width: 1%;">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detpesan as $data=>$v)
                            <tr>
                                <td>{{ $v->id}}</td>
                                <td>{{ $v->id_pesan }}</td>
                                <td>{{ $v->kode_bar }}</td>
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