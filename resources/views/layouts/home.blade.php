<!doctype html>
<html lang="en" class="h-100">
  <head>

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
    <a class="nav-link active" aria-current="page" href="#">Home</a>
    <li class="nav-item">
              <a class="nav-link" href="/login">
                  <i class="fa fa-sign-in-alt"></i>
                  Login 
              </a>
    </li>
    <li class="nav-item">
              <a class="nav-link" href="/signup">
                  <i class="fa fa-sign-in-alt"></i>
                  Sign Up 
              </a>
    </li>
  </nav>
</div>
</header>
 
</body>
</html>