@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Data Supplier</h1>
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/supplier/tambah" class="btn btn-success"> + Tambah Supplier Baru</a>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">No</th>
                                        {{-- <th>ID</th> --}}
                                        <th>Nama Supplier</th>
                                        <th>Kota</th>
                                        <th>Alamat Supplier</th>
                                        <th>No. Telepon</th>
                                        <th style="width: 1%;">Edit</th>
				                        <th style="width: 1%;">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($supplier as $dataSup => $v)
                                    <tr>
                                        <td class="text-wrap text-center">{{ $dataSup + 1 }}</td>
                                        {{-- <td>{{ $b -> id }}</td> --}}
                                        <td>{{ $v -> nama_sup }}</td>
                                        <td>{{ $v -> kota -> nama_kota }}</td>
                                        <td>{{ $v -> alamat_sup }}</td>
                                        <td>{{ $v -> telp_sup }}</td>     
                                        <td class="text-wrap"><a href="/supplier/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
				                        <td class="text-wrap"><a href="/supplier/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection