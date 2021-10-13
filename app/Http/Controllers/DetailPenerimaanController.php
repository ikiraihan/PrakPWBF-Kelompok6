<?php

namespace App\Http\Controllers;

use App\Models\DetailPenerimaan;
use Illuminate\Http\Request;

class DetailPenerimaanController extends Controller
{
    public function detailPenerimaan(){
        $detailPenerimaan = DetailPenerimaan::all();
    }
}
