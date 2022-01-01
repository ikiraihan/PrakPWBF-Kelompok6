@extends('layouts.home')
@section('container')
<body class="d-flex h-100 text-center text-gray bg-home">
    <div class="container">
        <div class="text-center">
            {{-- <h1 class="h3 text-gray-100 mt-5 mb-0">Welcome to RK Boutique</h1> --}}
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-13 mt-3">
                <div class="card shadow-lg border-0 rounded-lg mt-0">
                    <div class="card-body p-4">
                        @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                <span aria-hidden="true">&times;</span> 
                           </button>
                        </div>
                        @endif
                        <!-- Sign Up form-->
                        <div class="text-center">
                            <h1 class="h3 text-black mt-2 mb-4">Please Sign up</h1>
                        </div>
                        <form class="tabel_user" action="/signup" method="post">
                            @csrf
                            <div class="form-group row mb-3">
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control form-control-user @error('name')is-invalid @enderror" 
                                    id="name" placeholder="Name" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" name="email" class="form-control form-control-user @error('email')is-invalid @enderror" 
                                    id ="email" placeholder="Email" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-sm-6">
                                    <input type="text" name="alamat" class="form-control form-control-user @error('alamat')is-invalid @enderror" 
                                    id="alamat" placeholder="Alamat" required>
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="username" name="username" class="form-control form-control-user @error('username')is-invalid @enderror" 
                                    id="username" placeholder="Username" required>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-sm-6">
                                {{-- <input type="text" name="id_kota" class="form-control form-control-user @error('id_kota')is-invalid @enderror" 
                                id="id_kota" placeholder="Kota Tinggal" required value="{{ old('id_kota') }}"> --}}
                                <select class="form-control" id="id_kota" name="id_kota">
                                    @if($role->count())
                                        @foreach($kota as $v)
                                            <option value="{{ $v->id }}">{{ $v->nama_kota }}</option>
                                        @endforeach
                                    @endif
                                    </select>
                                    @error('id_kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control form-control-user @error('password')is-invalid @enderror"
                                    id="password" placeholder="Password" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-sm-6">
                                    <input type="text" name="telp" class="form-control form-control-user @error('telp')is-invalid @enderror" 
                                    id="telp" placeholder="Telepon" required>
                                    @error('telp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    {{-- <input type="text" name="id_role" class="form-control form-control-user @error('id_role')is-invalid @enderror" 
                                    id="id_role" placeholder="Role" required value="{{ old('id_role') }}"> --}}
                                    <select class="form-control" id="id_role" name="id_role">
                                        @if($role->count())
                                            @foreach($role as $v)
                                                <option value="{{ $v->id }}">{{ $v->jenis_role }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('id_role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-0 mt-4">
                                <button class="btn btn-primary btn-user btn-block"  type="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small text-secondary">Already have an account?&nbsp<a href="/login">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/homeassets/css/bg.css') }}" rel="stylesheet">