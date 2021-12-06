<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use App\Models\TabelUser;
use App\Models\Supplier;
use App\Models\DetailPenerimaan;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index(){
        $penerimaan = Penerimaan::with(['User','Supplier','detailPenerimaans'])->get();
    
        return view('penerimaan/index', [
            'title' => 'Penerimaan Barang',
            'penerimaan' => $penerimaan,
        ]);
    }

    public function create()
    {
        $user = TabelUser::all();
        $supplier = Supplier::all();
        $detterima = DetailPenerimaan::all();
        
        return view('penerimaan.create', [
            'title' => 'Tambah Penerimaan Barang',
            'user' => $user,
            'supplier' => $supplier,
            'detterima' => $detterima,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'  => 'required',
            'nama_sup'  => 'required|max:30',
            'tgl_terima' => 'required',
            'total_harga' => 'required',
            'status_terima' => 'required',
            'detterima' => 'required',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Penerimaan::create($validatedData);

        return redirect('/penerimaan');
    }

}
