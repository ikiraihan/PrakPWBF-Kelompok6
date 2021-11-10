<!DOCTYPE html>
	<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
        
            <title>Tambah Barang Baru</title>
        
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
            <h2 class="h3 mb-2 text-gray-800">Input Barang Baru</h2>
            <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <!-- Main Content-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <form action="/barang/store" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nama_barang">Nama Barang</label>
                                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="id_jb">Jenis Barang &nbsp</label>
                                                <select class="form-control" id="id_jb" name="id_jb">
                                                    @if($jenisbarang->count())
                                                        @foreach($jenisbarang as $v)
                                                            <option value="{{ $v->id }}">{{ $v->jenis_barang }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="stok_barang">Stok Barang &nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="stok_barang" name="stok_barang" placeholder="Jumlah Stok">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="harga_beli_barang">Harga Beli &nbsp&nbsp&nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="harga_beli_barang" name="harga_beli_barang" placeholder="Harga Beli">
                                            </div>
                                            <br/>
                                            <div class="form-group">
                                                <label for="harga_jual_barang">Harga Jual &nbsp&nbsp&nbsp&nbsp</label>
                                                <input type="text" class="form-control" id="harga_jual_barang" name="harga_jual_barang" placeholder="Harga Jual">
                                            </div>
                                            <br/>
                                            <div class="col-md-12";>
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
                    
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>
    
        </body>

	</html>