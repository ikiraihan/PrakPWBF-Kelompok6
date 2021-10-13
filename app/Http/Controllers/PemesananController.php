<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function pemesanan(){
        $pemesanan = Pemesanan::all();
    }
}
