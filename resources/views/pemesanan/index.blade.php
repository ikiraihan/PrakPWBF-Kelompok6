@extends('layouts.dashboard')

@section('container')
<h1 class="h3 mb-2 text-gray-800">Pemesanan Barang</h1>
<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/pemesanan/create" class="btn btn-success"> + &nbspPesan</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Pemesan</th>
                            <th>Supplier</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th style="width: 1%;">Detail</th>
                            <th style="width: 1%;">Edit</th>
                            <th style="width: 1%;">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $data=>$v)
                            <tr>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->User->name }}</td>
                                <td>{{ $v->Supplier->nama_sup }}</td>
                                <td>{{ $v->tgl_pesan }}</td>
                                <td>{{ $v->status_pesan }}</td>
                                <td class="text-wrap"><a href="/detailpemesanan/index/{{ $v->id }}" class="btn btn-warning">Show</a></td>
                                <td class="text-wrap"><a href="/pemesanan/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                <td class="text-wrap"><a href="/pemesanan/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
{{-- <td class="text-wrap"><a href="/ukuran/edit/{{ $v->id }}"  class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="user-management-edit-user.html">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
</td>
<td class="text-wrap"><a href="/ukuran/destroy/{{ $v->id }}"  onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-datatable btn-icon btn-transparent-dark" href="#!">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
</td>  --}}