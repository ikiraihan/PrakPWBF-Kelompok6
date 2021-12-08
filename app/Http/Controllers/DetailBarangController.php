<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use App\Models\Warna;
use App\Models\Barang;
use App\Models\DetailBarang;
use Illuminate\Http\Request;

class DetailBarangController extends Controller
{
    public function index(Barang $id)
    {
        $detbar = DetailBarang::with(['Barang', 'Warna', 'Ukuran'])->get();
    
        return view('detailBarang.index', [
            'title' => 'Detail Barang',
            'detbar' => $detbar,
            'detailbar' => DetailBarang::where('kode_bar', $id->id)->get(),
            'barang' => $id,
        ]);
    }

    public function create($id)
    {
        // $detailbar = DetailBarang::with('Barang', 'Warna', 'Ukuran')->get();
        $ukuran = Ukuran::all();
        $warna = Warna::all();

        return view('detailPemesanan.create', [
            'title' => 'Tambah Detail Pemesanan',
            'barang' => Barang::find($id),
            // 'detailbar' => $detailbar,
            'ukuran' => $ukuran,
            'warna' => $warna,
        ]);
    }
}
