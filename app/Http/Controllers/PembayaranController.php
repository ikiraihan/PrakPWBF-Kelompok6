<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        $pembayaran = Pembayaran::all();
    
        return view('pembayaran/index', [
            'title' => 'Pembayaran Barang',
            'pembayaran' => $pembayaran,
        ]);
    }
}
