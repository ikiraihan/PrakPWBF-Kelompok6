<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\TabelUser;
use App\Models\Supplier;
use App\Models\DetailPemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $pemesanan = Pemesanan::with(['User','supplier','detailPemesanans'])->get();

        return view('pemesanan/index', [
            'title' => 'Pemesanan Barang',
            'pemesanan' => $pemesanan,
        ]);
    }

    public function create()
    {
        $user = TabelUser::all();
        $supplier = Supplier::all();
        $detpesan = DetailPemesanan::all();
        
        return view('pemesanan.create', [
            'title' => 'Tambah Pemesanan',
            'user' => $user,
            'supplier' => $supplier,
            'detpesan' => $detpesan,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_sup'  => 'required|max:30',
            'detpesan' => 'required',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Pemesanan::create($validatedData);

        return redirect('/pemesanan');
    }
}
