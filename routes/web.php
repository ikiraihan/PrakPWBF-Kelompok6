<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\login;
use App\Http\Controllers\dashboard;


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

Route::get('/kota', [KotaController::class, 'kota']);

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

// //Route::get('/order', [Pemesanan::class, 'Pemesanan']);



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
