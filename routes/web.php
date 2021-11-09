<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\login;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;

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

Route::get('/home', [home::class, 'home']);

Route::get('/dashboard', [dashboard::class, 'dashboard']);

Route::get('/', [login::class, 'login']);


// CRUD KOTA //
Route::get('/kota', [KotaController::class, 'index']);
Route::get('/kota/tambah', [KotaController::class, 'create']);
Route::post('/kota/store', [KotaController::class, 'store']);
Route::get('/kota/edit/{id}', [KotaController::class,'edit']);
Route::post('/kota/update/{id}', [KotaController::class,'update']);
Route::get('/kota/destroy/{id}', [KotaController::class,'destroy']);


// CRUD JENIS BARANG //
Route::get('/jenisbarang', [JenisBarangController::class, 'index']);
Route::get('/jenisbarang/tambah', [JenisBarangController::class, 'create']);
Route::post('/jenisbarang/store', [JenisBarangController::class, 'store']);
Route::get('/jenisbarang/edit/{id}', [JenisBarangController::class,'edit']);
Route::post('/jenisbarang/update/{id}', [JenisBarangController::class,'update']);
Route::get('/jenisbarang/destroy/{id}', [JenisBarangController::class,'destroy']);



// CRUD BARANG //
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/tambah', [BarangController::class, 'create']);
Route::post('/barang/store', [BarangController::class, 'store']);


// CRUD UKURAN // 
Route::get('/ukuran', [UkuranController::class, 'index']);
Route::get('/ukuran/tambah', [UkuranController::class, 'create']);
Route::post('/ukuran/store', [UkuranController::class, 'store']);


// CRUD WARNA //
Route::get('/warna', [WarnaController::class, 'index']);
Route::get('/warna/tambah', [WarnaController::class, 'create']);
Route::post('/warna/store', [WarnaController::class, 'store']);

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
