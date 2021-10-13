<?php

namespace App\Http\Controllers;

use App\Models\DetailPemesanan;
use Illuminate\Http\Request;

class DetailPemesananController extends Controller
{
    public function detailPemesanan(){
        $detailPemesanan = DetailPemesanan::all();
    }
}
