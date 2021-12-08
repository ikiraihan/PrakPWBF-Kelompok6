<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pemesanan;
use App\Models\DetailPemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailPemesananController extends Controller
{
    public function index(Pemesanan $id){
        $detpemesanan = DetailPemesanan::with('Barang')->get();

        return view('detailPemesanan.index', [
            'title' => 'Detail Pemesanan',
            'detpemesanan' => $detpemesanan,
            'detpesan' => DetailPemesanan::where('id_pesan', $id->id)->get(),
            'pemesanan' => $id,
        ]);
    }

    public function create($id)
    {
        $barang = Barang::all();
        $pemesanan = Pemesanan::all();
        
        return view('detailPemesanan.create', [
            'title' => 'Tambah Detail Pemesanan',
            'barang' => Barang::find($id),
            'barang' => $barang,
            'pemesanan' => $pemesanan,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pesan' => 'required',
            'kode_bar'  => 'required',
            'jumlah_up' => 'required',
            'harga_up' => 'required',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        DetailPemesanan::create($validatedData);

        return redirect('/detail-pemesanan');
    }

    
}
