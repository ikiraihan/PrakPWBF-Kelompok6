<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() { 
        $barang = Barang::all();

        return view('barang/index', [
            'title' => 'Data Barang',
            'barang' => $barang
        ]);
    }

    public function create()
    {
        $jenisbarang = JenisBarang::all();

        return view('barang/tambah', [
            'title' => 'Tambah Jenis Barang',
            'jenisbarang' => $jenisbarang
        ]);
    }

    public function store(Request $request)
    {
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'harga_beli_barang' => $request->harga_beli_barang,
            'harga_jual_barang' => $request->harga_jual_barang,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/barang');
    }

    public function show($id)
    {
        //
    }
}
