@extends('layouts.dashboard')

@section('container')
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="/user/create" class="btn btn-success"> + &nbspTambah User</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    {{-- <th>ID</th> --}}
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Nama User</th>
                                    <th>Alamat User</th>
                                    {{-- <th>Kota</th> --}}
                                    {{-- <th>Email</th> --}}
                                    <th>No. Telepon</th>
                                    <th>Edit</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $dataUser => $v)
                                <tr>
                                    <td class="text-wrap text-center">{{ $dataUser + 1 }}</td>
                                    {{-- <td>{{ $b -> id }}</td> --}}
                                    <td>{{ $v -> username }}</td>
                                    <td>{{ $v -> role -> jenis_role }}</td>
                                    <td>{{ $v -> name }}</td>
                                    <td>{{ $v -> alamat }}</td>
                                    {{-- <td>{{ $v -> kota -> nama_kota }}</td>  --}}
                                    {{-- <td>{{ $v -> email }}</td> --}}
                                    <td>{{ $v -> telp }}</td>   
                                    <td class="text-wrap"><a href="/user/edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                    <td class="text-wrap"><a href="/user/destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>                                        
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection