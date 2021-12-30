<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/homeassets/css/bg.css') }}" rel="stylesheet">
</head>
<!--template navbar-->
<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">

<!-- Bootstrap core CSS -->
<link href="{{ asset('vendor/homeassets/css/bootstrap.min.css') }}" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

<!-- Custom styles for this template -->
<link href="{{ asset('vendor/homeassets/css/bg.css') }}" rel="stylesheet">
</head>
<body class="d-flex h-100 text-center text-white bg-home">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<header class="mb-auto">
<div>
  <h3 class="float-md-start mb-0">RK Boutique</h3>
  <nav class="nav nav-masthead justify-content-center float-md-end">
    <li class="nav-item">
              <a class="nav-link" href="/">
                  <i class="fa"></i>
                  Home 
              </a>
    </li>
    <a class="nav-link active" aria-current="page" href="#">Login</a>
    <li class="nav-item">
              <a class="nav-link" href="/signup">
                  <i class="fa"></i>
                  Sign Up 
              </a>
    </li>
  </nav>
</div>
</header>

<body class="d-flex h-100 text-center text-white bg-home">
    <div class="container">
        <div class="text-center">
            <h1 class="h3 text-gray-100 mt-5 mb-0">Welcome to RK Boutique!</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-0 mt-0">
                <div class="card shadow-lg border-0 rounded-lg mt-4">
                    <div class="card-body p-5">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                    <span aria-hidden="true">&times;</span> 
                                </button>
                         </div>
                        @endif
                        @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                                    <span aria-hidden="true">&times;</span> 
                                </button>
                            </div>
                        @endif
                        <!-- Login form-->
                        <div class="text-center">
                            <h1 class="h3 text-gray-900 mt-2 mb-4">Login</h1>
                        </div>
                        <form class="tabel_user" action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                                 placeholder="email" autofocus required value="{{ old('email') }}">
                                 @error('email')
                                 <div class="invalid-feedback">
                                     {{ $message }}
                                 </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control " id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-user btn-block"  type="submit" id="login">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small text-gray-800">Don't have an account?&nbsp<a href="/signup">Register now!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
    
    </body>

</html>