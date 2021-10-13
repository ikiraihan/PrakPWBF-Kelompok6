<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function penerimaan(){
        $penerimaan = Penerimaan::all();
    }
}
