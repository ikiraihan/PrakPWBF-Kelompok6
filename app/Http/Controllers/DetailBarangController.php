<?php

namespace App\Http\Controllers;

use App\Models\DetailBarang;
use Illuminate\Http\Request;

class DetailBarangController extends Controller
{
    public function detailBarang()
    {
        $detailBarang = DetailBarang::all();
    }
}
