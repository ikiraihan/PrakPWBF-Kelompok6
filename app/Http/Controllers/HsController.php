<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Hs;
use Illuminate\Http\Request;

class HsController extends Controller
{
    public function index(Barang $id){

        return view('hs.index', [
            'title' => 'Histori Stok',
            'hs' => Hs::where('kode_bar', $id->id)->get(),
            'barang' => $id,
        ]);
    }

    public function create($id)
    {
        $barangs = Barang::all();
        
        return view('hs.create', [
            'title' => 'Tambah Histori Stok',
            'barangs' => $barangs,
            'barang' => Barang::find($id),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_bar'   => 'required',
            'tgl_hs'        => 'required',
            'update_stok_hs'=> 'required',
            'status'        => 'required',
        ]);

        Hs::create($validatedData);

        $request->session()->flash('successHistoriStok','Histori Stok Berhasil Ditambahkan');

        return redirect('/histori-stok/index');
    }
}
