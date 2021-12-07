<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penerimaan;
use App\Models\DetailPenerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailPenerimaanController extends Controller
{
    public function index(Penerimaan $id){
        $detpenerimaan = DetailPenerimaan::with('Barang')->get();

        return view('detailPenerimaan.index', [
            'title' => 'Detail Penerimaan',
            'detpenerimaan' => $detpenerimaan ,
            'detterima' => DetailPenerimaan::where('id_terima', $id->id)->get(),
            'penerimaan' => $id,
        ]);
    }

    public function create()
    {
        $barang = Barang::all();
        $pemesanan = Penerimaan::all();
        
        return view('detailPemesanan.create', [
            'title' => 'Tambah Detail Penerimaan',
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

        DetailPenerimaan::create($validatedData);

        return redirect('/detail-pemesanan');
    }
}
