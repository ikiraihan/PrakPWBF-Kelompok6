<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function jenisBarang(){
        $jenisBarang = JenisBarang::all();
    }
}
