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
use App\Http\Controllers\DetailPembayaranController;

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
Route::post('/signup', [SignUpController::class, 'store'])->middleware('guest');

// login //
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/login', [LoginController::class, 'index']);

Route::group(['middleware'=>'auth'],function() {
//LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);
// DASHBOARD //
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

// CRUD ROLE //
Route::get('/role', [RoleController::class, 'index']);
Route::get('/role/create', [RoleController::class, 'create']);
Route::post('/role/store', [RoleController::class, 'store']);
Route::get('/role/edit/{id}', [RoleController::class,'edit']);
Route::post('/role/update/{id}', [RoleController::class,'update']);
Route::get('/role/destroy/{id}', [RoleController::class,'destroy']);


// CRUD USERS //
Route::get('/user', [TabelUserController::class, 'index']);
Route::get('/user/create', [TabelUserController::class, 'create']);
Route::post('/user/store', [TabelUserController::class, 'store']);
Route::get('/user/edit/{id}', [TabelUserController::class,'edit']);
Route::post('/user/update/{id}', [TabelUserController::class,'update']);
Route::get('/user/destroy/{id}', [TabelUserController::class,'destroy']);


// CRUD KOTA //
Route::get('/kota', [KotaController::class, 'index']);
Route::get('/kota/create', [KotaController::class, 'create']);
Route::post('/kota/store', [KotaController::class, 'store']);
Route::get('/kota/edit/{id}', [KotaController::class,'edit']);
Route::post('/kota/update/{id}', [KotaController::class,'update']);
Route::get('/kota/destroy/{id}', [KotaController::class,'destroy']);


// CRUD JENIS BARANG //
Route::get('/jenisbarang', [JenisBarangController::class, 'index']);
Route::get('/jenisbarang/create', [JenisBarangController::class, 'create']);
Route::post('/jenisbarang/store', [JenisBarangController::class, 'store']);
Route::get('/jenisbarang/edit/{id}', [JenisBarangController::class,'edit']);
Route::post('/jenisbarang/update/{id}', [JenisBarangController::class,'update']);
Route::get('/jenisbarang/destroy/{id}', [JenisBarangController::class,'destroy']);


// CRUD BARANG //
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/create', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [BarangController::class,'edit']);
Route::post('/barang/update/{id}', [BarangController::class,'update']);
Route::get('/barang/destroy/{id}', [BarangController::class,'destroy']);


// CRUD UKURAN // 
Route::get('/ukuran', [UkuranController::class, 'index']);
Route::get('/ukuran/create', [UkuranController::class, 'create']);
Route::post('/ukuran/store', [UkuranController::class, 'store']);
Route::get('/ukuran/edit/{id}', [UkuranController::class,'edit']);
Route::post('/ukuran/update/{id}', [UkuranController::class,'update']);
Route::get('/ukuran/destroy/{id}', [UkuranController::class,'destroy']);



// CRUD WARNA //
Route::get('/warna', [WarnaController::class, 'index']);
Route::get('/warna/create', [WarnaController::class, 'create']);
Route::post('/warna/store', [WarnaController::class, 'store']);
Route::get('/warna/edit/{id}', [WarnaController::class,'edit']);
Route::post('/warna/update/{id}', [WarnaController::class,'update']);
Route::get('/warna/destroy/{id}', [WarnaController::class,'destroy']);


// CRUD SUPPLIER //
Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/create', [SupplierController::class, 'create']);
Route::post('/supplier/store', [SupplierController::class, 'store']);
Route::get('/supplier/edit/{id}', [SupplierController::class,'edit']);
Route::post('/supplier/update/{id}', [SupplierController::class,'update']);
Route::get('/supplier/destroy/{id}', [SupplierController::class,'destroy']);



Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/create', [PemesananController::class, 'create']);
Route::post('/pemesanan/store', [PemesananController::class, 'store']);
Route::get('/pemesanan/edit/{id}', [PemesananController::class,'edit']);
Route::post('/pemesanan/update/{id}', [PemesananController::class,'update']);
Route::get('/pemesanan/destroy/{id}', [PemesananController::class,'destroy']);
Route::get('/detailpemesanan/index/{id}', [DetailPemesananController::class,'index']);

Route::get('/penerimaan', [PenerimaanController::class, 'index']);
Route::get('/detailpenerimaan/index/{id}', [DetailPenerimaanController::class,'index']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);


// Route::get('/', function () {
//     return view('home',[
//         "title"=>"Home"
//     ]);
// });

// Route::get('/data', function () {
//     return view('data', [
//         "title"=> "Data"
//     ]);
// });

// Route::get('/order', function () {
//     return view('order',[
//         "title"=>"Order"
//    ]);
// });

// Route::get('/terima', function () {
//     return view('terima', [
//         "title"=>"Penerimaan"
//     ]);
// });

// Route::get('/bayar', function () {
//     return view('bayar',[
//         "title"=>"Pembayaran"
//     ]);
// });

// Route::get('/login', function () {
//     return view('login',[
//         "title"=>"Login"
//     ]);
// });
});
