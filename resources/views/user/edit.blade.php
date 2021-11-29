<!DOCTYPE html>
	<html lang="en">
	
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<title>Edit Data User</title>
	
		<!-- Custom fonts for this template-->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link
			href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
			rel="stylesheet">
	
		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
	
	</head>
		<body class="bg-gradient-primary">
			<div class="container">
			    <h2 class="h3 mb-2 text-gray-800">Edit Data User</h2>
            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <!-- Main Content-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <form action="/user/update/{{ $user->id }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="name">Nama User &nbsp&nbsp&nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ $user->name }}">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="alamat">Alamat User&nbsp&nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $user->alamat}}">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="id_kota">Kota Tinggal &nbsp</label>
                                                <select class="form-control" id="id_kota" name="id_kota">
                                                    @if($kota->count())
                                                        @foreach($kota as $v)
                                                            <option value="{{ $v->id }}" {{ $user->id_kota == $v->id ? 'selected="selected"' : '' }}>{{ $v->nama_kota }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="telp">No. Telepon &nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="telp" name="telp" placeholder="No. Telepon" value="{{ $user->telp }}">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="email">Email User &nbsp&nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="username">Username &nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ $user->username }}">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="password">Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{ $user->password }}">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="id_role">Role User &nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                                <select class="form-control" id="id_role" name="id_role">
                                                    @if($role->count())
                                                        @foreach($role as $v)
                                                            <option value="{{ $v->id }}" {{ $user->id_role == $v->id ? 'selected="selected"' : '' }}>{{ $v->jenis_role }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <br/>
                                            <div class="col-md-12">
                                                <input type="submit" class="btn btn-success" value="Simpan Data">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>		
			</div>
	    </body>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	</html>