@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">User's Role</h1>
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/role/create" class="btn btn-success"> + &nbspTambah Role</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 1%;">No</th>
                                    {{-- <th style="width: 13%;">ID</th> --}}
                                    <th>Jenis Role</th>
                                    <th style="width: 1%;">Edit</th>
				                    <th style="width: 1%;">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($role as $dataRole=>$v)
                                    <tr>
                                        <td class="text-wrap text-center">{{ $dataRole + 1 }}</td>
                                        {{-- <td>{{ $v -> id }}</td> --}}
                                        <td>{{ $v -> jenis_role }}</td>
                                        <td class="text-wrap"><a href="/role/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
				                        <td class="text-wrap"><a href="/role/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                            
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection

@section('script')
	<script>
		$(function () {
			$('#example1').DataTable();
		});
  </script>
@endsection