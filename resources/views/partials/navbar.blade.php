{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Boutique Sembarang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Data") ? 'active' : ''}}" href="/data">Pendataan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Order") ? 'active' : ''}} " href="/order">Order</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Penerimaan") ? 'active' : ''}}" href="/terima">Penerimaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Pembayaran") ? 'active' : ''}}" href="/bayar">Pembayaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Login") ? 'active' : ''}} " href="/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php">RK Boutique</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
      <!-- Jika belum diset login, maka navbarnya begini -->
          <li class="nav-item">
          <a class="nav-link" href="index.php">
              <i class="fa fa-index"></i>
              Index 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="_home.php">
              <i class="fa fa-home"></i>
              Home 
          </a> 
      </li>
        
        <li class="nav-item">
          <a class="nav-link" href="login.php">
              <i class="fa fa-sign-in-alt"></i>
              Login 
          </a>
        </li>
      <!-- Jika sudah diset login, maka navbarnya begini -->
          </ul>
    </div>
  </div>
  </nav>