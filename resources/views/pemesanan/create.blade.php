{{-- @extends('layouts.dashboard')

@section('container') --}}
<!DOCTYPE html>
	<html lang="en">
        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
        
            <title>{{ $title }}</title>
        
            <!-- Custom fonts for this template-->
            <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">
        
            <!-- Custom styles for this template-->
            <link href="css/sb-admin-2.min.css" rel="stylesheet">
        
            <!-- Custom styles for this page -->
            <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        
        </head>
        
        <body id="page-top">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-12 col-md-9 mt-4">
                    <a href="/pemesanan" class="btn btn-primary">Kembali</a>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="h3 mb-2 text-gray-800">Formulir Pemesanan Barang</h1>
                        </div>
                        <div class="card-body">
                            <form action="/pemesanan/store" method="post">
                                {{ csrf_field() }}
                                <div class="col-md-12 mb-3">
                                    <label for="nama_kota">Nama Kota</label>
                                    <input type="text" class="form-control" id="nama_kota" name="nama_kota" placeholder="Nama Kota">
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="exampleFormControlSelect1">Example select</label><select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect2">Example multiple select</label><select class="form-control" id="exampleFormControlSelect2" multiple="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="mb-0">
                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div> --}}
                                <div class="col-md-12 text-right">
                                    <input type="submit" class="btn btn-danger" value="Simpan Data">
                                </div>
                            </form>
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

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script src="js/demo/chart-bar-demo.js"></script>
        <script src="js/demo/datatables-demo.js"></script>
        
    </html>
{{-- @endsection --}}
{{-- <td class="text-wrap"><a href="/ukuran/edit/{{ $v->id }}"  class="btn btn-datatable btn-icon btn-transparent-dark me-2" href="user-management-edit-user.html">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
</td>
<td class="text-wrap"><a href="/ukuran/destroy/{{ $v->id }}"  onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-datatable btn-icon btn-transparent-dark" href="#!">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
</td>  --}}