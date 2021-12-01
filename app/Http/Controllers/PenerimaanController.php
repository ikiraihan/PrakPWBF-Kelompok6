<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index(){
        $penerimaan = Penerimaan::all();
    
        return view('penerimaan/index', [
            'title' => 'Penerimaan Barang',
            'penerimaan' => $penerimaan,
        ]);
    }

}
