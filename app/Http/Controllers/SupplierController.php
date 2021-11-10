<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();

        return view('supplier/index', [
            'title' => 'Supplier',
            'supplier' => $supplier
        ]);
    }

    public function create()
    {
        $kota = Kota::all();

        return view('supplier/tambah', [
            'title' => 'Tambah Data Supplier',
            'kota' => $kota
        ]);
    }

    public function store(Request $request)
    {
        Supplier::create([
            'nama_supplier' => $request->nama_sup,
            'alamat_sup' => $request->alamat_Sup,
            'telp_sup' => $request->telp_sup,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/supplier');
    }

    public function show($id)
    {
        //
    }
}
