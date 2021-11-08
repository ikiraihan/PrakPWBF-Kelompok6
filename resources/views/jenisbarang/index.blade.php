@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tabel Jenis Barang</h1>
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/jenisbarang/tambah" class="btn btn-success"> + Tambah Jenis Barang Baru</a>
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">No</th>
                                        {{-- <th>ID</th> --}}
                                        <th>Nama Jenis barang</th>
                                        <th style="width: 1%;">Edit</th>
                                        <th style="width: 1%;">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jenisbarang as $datajb=>$jb)
                                    <tr>
                                        <td class="text-wrap text-center">{{ $datajb + 1 }}</td>
                                        {{-- <td>{{ $v -> id }}</td> --}}
                                        <td>{{ $jb -> jenis_barang }}</td>
                                        <td class="text-wrap"><a href="/jenisbarang/edit/{{ $jb->id }}" class="btn btn-primary">Edit</a></td>
				                        <td class="text-wrap"><a href="/jenisbarang/destroy/{{ $jb->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection