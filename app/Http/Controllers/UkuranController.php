<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use Illuminate\Http\Request;

class UkuranController extends Controller
{
    public function ukuran(){
        $ukuran = Ukuran::all();
    }
}
