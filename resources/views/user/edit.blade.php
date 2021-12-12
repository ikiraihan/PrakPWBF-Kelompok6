@extends('layouts.dashboard')

@section('container')
<div id="layout_content">
    <main>
        <div class="container">
            <a href="/user"><i class="fas fa-fw fa-arrow-left mb-3"></i><strong>Back</strong></a>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h1 class="h3 mt-2 mb-2 text-gray-800">User Baru</h1>
                </div>
                <div class="card-body">
                    <form action="/user/update/{{ $user->id }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="name">Nama User</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $user->name }}">
                            </div> 
                            <div class="col-sm-6">
                                <label for="email">Email User</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="alamat">Alamat User</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $user->alamat}}">
                            </div>
                            <div class="col-sm-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ $user->username }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="id_kota">Kota Tinggal</label>
                                <select class="form-control" id="id_kota" name="id_kota">
                                    @if($kota->count())
                                        @foreach($kota as $v)
                                            <option value="{{ $v->id }}" {{ $user->id_kota == $v->id ? 'selected="selected"' : '' }}>
                                                {{ $v->nama_kota }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ $user->password }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="telp">No. Telepon</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telepon" value="{{ $user->telp }}">
                            </div>
                            <div class="col-sm-6">
                                <label for="id_role">Role User</label>
                                <select class="form-control" id="id_role" name="id_role">
                                    @if($role->count())
                                        @foreach($role as $v)
                                            <option value="{{ $v->id }}" {{ $user->id_role == $v->id ? 'selected="selected"' : '' }}>{{ $v->jenis_role }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center justify-content-center mb-2 mt-4">
                            <input type="submit" class="btn btn-danger" value="Simpan Data">
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </main>
</div>
@endsection