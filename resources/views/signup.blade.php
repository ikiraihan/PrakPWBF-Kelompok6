<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

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
            <div class="row justify-content-center p-0">
                <div class="col-lg-8">
                    <!-- Basic login form-->
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-5">
                            <!-- Login form-->
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mt-2 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="/signup" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="name" class="form-control form-control-user"
                                            id="name" aria-describedby="name"
                                            placeholder="Name">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="id_role" name="id_role">
                                            @if($role->count())
                                                @foreach($role as $v)
                                                    <option value="{{ $v->id }}">{{ $v->jenis_role }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="address" class="form-control form-control-user"
                                        id="address" aria-describedby="address"
                                        placeholder="Address">
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" id="id_kota" name="id_kota">
                                            @if($kota->count())
                                                @foreach($kota as $v)
                                                    <option value="{{ $v->id }}">{{ $v->nama_kota }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user"
                                        id="email" placeholder="Email">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="contact" class="form-control form-control-user"
                                        id="contact" placeholder="Contact">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="username" class="form-control form-control-user"
                                        id="username" placeholder="username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <a href="/dashboard" class="btn btn-primary btn-user btn-block">Register Account</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small text-gray-800">Already have an account?&nbsp<a href="/">Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
    
</body>
</html>