<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TabelUserController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DetailPemesananController;
use App\Http\Controllers\DetailPenerimaanController;
use App\Http\Controllers\DetailBarangController;
use App\Http\Controllers\HsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->middleware('guest');

// sign up //
Route::get('/signup', [SignUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignUpController::class, 'store']);

// login //
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

//LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

// INI YANG CUMA BISA DITAMPILIN DI ROLE PEMILIK //
    // CRUD USERS //
    Route::get('/user', [TabelUserController::class, 'index'])->middleware(['auth','CekRole:1']);
    Route::get('/user/create', [TabelUserController::class, 'create'])->middleware(['auth','CekRole:1']);
    Route::post('/user/store', [TabelUserController::class, 'store'])->middleware(['auth','CekRole:1']);
    Route::get('/user/edit/{id}', [TabelUserController::class,'edit'])->middleware(['auth','CekRole:1']);
    Route::post('/user/update/{id}', [TabelUserController::class,'update'])->middleware(['auth','CekRole:1']);
    Route::get('/user/destroy/{id}', [TabelUserController::class,'destroy'])->middleware(['auth','CekRole:1']);

    // ROLE //
    Route::get('/role', [RoleController::class, 'index'])->middleware(['auth','CekRole:1']);
    Route::get('/role/create', [RoleController::class, 'create'])->middleware(['auth','CekRole:1']);
    Route::post('/role/store', [RoleController::class, 'store'])->middleware(['auth','CekRole:1']);
    Route::get('/role/edit/{id}', [RoleController::class,'edit'])->middleware(['auth','CekRole:1']);
    Route::post('/role/update/{id}', [RoleController::class,'update'])->middleware(['auth','CekRole:1']);
    Route::get('/role/destroy/{id}', [RoleController::class,'destroy'])->middleware(['auth','CekRole:1']);


    // CRUD PEMBAYARAN YANG MAU DIPINDAH BUAT BISA DILIHAT PEMILIK DOANG PINDAH KESINI JE //
    Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->middleware(['auth','CekRole:1']);
    Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->middleware(['auth','CekRole:1']);
    Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit'])->middleware(['auth','CekRole:1']);
    Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update'])->middleware(['auth','CekRole:1']);
    Route::get('/pembayaran/delete/{id}', [PembayaranController::class, 'destroy'])->middleware(['auth','CekRole:1']);

// INI YANG CUMA BISA DITAMPILIN DI ROLE PEGAWAI //
Route::group(['middleware'=>['auth','CekRole:2']],function() {
    
});

// INI YANG BISA DITAMPILIN DI 2 ROLE
    // DASHBOARD //
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth','CekRole:1,2']);
    Route::get('/dashboard-pegawai', [DashboardController::class, 'pegawai'])->middleware(['auth','CekRole:1,2']);

    // KOTA //
    Route::get('/kota', [KotaController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/kota/create', [KotaController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/kota/store', [KotaController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/kota/edit/{id}', [KotaController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/kota/update/{id}', [KotaController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::delete('/kota/destroy/{id}', [KotaController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // JENIS BARANG //
    Route::get('/jenisbarang', [JenisBarangController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/jenisbarang/create', [JenisBarangController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/jenisbarang/store', [JenisBarangController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/jenisbarang/edit/{id}', [JenisBarangController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/jenisbarang/update/{id}', [JenisBarangController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/jenisbarang/destroy/{id}', [JenisBarangController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // BARANG //
    Route::get('/barang', [BarangController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/barang/create', [BarangController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/barang/store', [BarangController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/barang/edit/{id}', [BarangController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/barang/update/{id}', [BarangController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/barang/destroy/{id}', [BarangController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // HISTORI STOK //
    Route::get('/historistok/index/{id}', [HsController::class,'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/historistok/create/{id}', [HsController::class,'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/historistok/store', [HsController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/historistok/edit/{id}', [HsController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/historistok/update/{id}', [HsController::class, 'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/historistok/destroy/{id}', [HsController::class, 'destroy'])->middleware(['auth','CekRole:1,2']);


    // DETAIL BARANG //
    Route::get('/detailbarang/index/{id}', [DetailBarangController::class,'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailbarang/create/{id}', [DetailBarangController::class,'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/detailbarang/store', [DetailBarangController::class,'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailbarang/edit/{id}', [DetailBarangController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/detailbarang/update/{id}', [DetailBarangController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailbarang/destroy/{id}', [DetailBarangController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // UKURAN // 
    Route::get('/ukuran', [UkuranController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/ukuran/create', [UkuranController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/ukuran/store', [UkuranController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/ukuran/edit/{id}', [UkuranController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/ukuran/update/{id}', [UkuranController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/ukuran/destroy/{id}', [UkuranController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // WARNA //
    Route::get('/warna', [WarnaController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/warna/create', [WarnaController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/warna/store', [WarnaController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/warna/edit/{id}', [WarnaController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/warna/update/{id}', [WarnaController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/warna/destroy/{id}', [WarnaController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // SUPPLIER //
    Route::get('/supplier', [SupplierController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/supplier/create', [SupplierController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/supplier/store', [SupplierController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/supplier/edit/{id}', [SupplierController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/supplier/update/{id}', [SupplierController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/supplier/destroy/{id}', [SupplierController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // PEMESANAN //
    Route::get('/pemesanan', [PemesananController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/pemesanan/create', [PemesananController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/pemesanan/store', [PemesananController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/pemesanan/edit/{id}', [PemesananController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/pemesanan/update/{id}', [PemesananController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/pemesanan/destroy/{id}', [PemesananController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // DETAIL PEMESANAN //
    Route::get('/detailpemesanan/index/{id}', [DetailPemesananController::class,'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailpemesanan/create/{id}', [DetailPemesananController::class,'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/detailpemesanan/store', [DetailPemesananController::class,'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailpemesanan/edit/{id}', [DetailPemesananController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/detailpemesanan/update/{id}', [DetailPemesananController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailpemesanan/destroy/{id}', [DetailPemesananController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // PENERIMAAN //
    Route::get('/penerimaan', [PenerimaanController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/penerimaan/create', [PenerimaanController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/penerimaan/store', [PenerimaanController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/penerimaan/edit/{id}', [PenerimaanController::class, 'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/penerimaan/update/{id}', [PenerimaanController::class, 'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/penerimaan/destroy/{id}', [PenerimaanController::class, 'destroy'])->middleware(['auth','CekRole:1,2']);


    // DETAIL PENERIMAAN //
    Route::get('/detailpenerimaan/index/{id}', [DetailPenerimaanController::class,'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailpenerimaan/create/{id}', [DetailPenerimaanController::class,'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/detailpenerimaan/store', [DetailPenerimaanController::class,'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailpenerimaan/edit/{id}', [DetailPenerimaanController::class,'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/detailpenerimaan/update/{id}', [DetailPenerimaanController::class,'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/detailpenerimaan/destroy/{id}', [DetailPenerimaanController::class,'destroy'])->middleware(['auth','CekRole:1,2']);


    // PEMBAYARAN //
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware(['auth','CekRole:1,2']);
    Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->middleware(['auth','CekRole:1,2']);
    Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->middleware(['auth','CekRole:1,2']);
    Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit'])->middleware(['auth','CekRole:1,2']);
    Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update'])->middleware(['auth','CekRole:1,2']);
    Route::get('/pembayaran/delete/{id}', [PembayaranController::class, 'destroy'])->middleware(['auth','CekRole:1,2']);
    Route::get('/pembayaran/show/{id}', [PembayaranController::class, 'show'])->middleware(['auth','CekRole:1,2']);