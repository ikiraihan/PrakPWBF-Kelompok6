<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index(){
        $jenisBarang = JenisBarang::all();

        return view('jenisbarang/index', ['jenisbarang' => $jenisBarang]);
    }

    public function create()
    {
        return view('jenisbarang/tambah');
    }

    public function store(Request $request)
    {
        JenisBarang::create([
            'jenis_barang' => $request->jenis_barang,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/jenisbarang');
    }

    public function show($id)
    {
        //
    }
}
