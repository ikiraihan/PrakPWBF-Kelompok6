<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\DetailBarang;
use App\Models\Hs;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() { 
        $barang = Barang::with(['jenisBarang'])->get();

        return view('barang/index', [
            'title' => 'Data Barang',
            'barang' => $barang
        ]);
    }

    public function create()
    {
        $jenisbarang = JenisBarang::all();
        $detailBarang = DetailBarang::all();
        $hs = Hs::all();

        return view('barang/create', [
            'title' => 'Tambah Barang',
            'jenisbarang' => $jenisbarang,
            'detbar' => $detailBarang,
            'hs' => $hs,
        ]);
    }

    public function store(Request $request)
    {
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'id_jb'       => $request->id_jb,
            'stok_barang' => $request->stok_barang,
            'harga_beli_barang' => $request->harga_beli_barang,
            'harga_jual_barang' => $request->harga_jual_barang,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        $request->session()->flash('success', 'Data Barang Berhasil ditambahkan!');

        return redirect('/barang');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jenisbarang = JenisBarang::all();
        $barang = Barang::find($id);
        
        return view('barang/edit',[
            'title' => 'Edit Barang',
            'barang' => $barang,
            'jenisbarang' => $jenisbarang
        ]);
    }

    public function update(Request $request, $id)
    {
        Barang::where('id', $id)->update([
            'nama_barang' => $request->nama_barang,
            'id_jb' => $request->id_jb,
            'stok_barang' => $request->stok_barang,
            'harga_beli_barang' => $request->harga_beli_barang,
            'harga_jual_barang' => $request->harga_jual_barang,
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $request->session()->flash('success', 'Data Barang Berhasil diupdate!');
        
        return redirect('/barang');
    }

    public function destroy($id)
    {
        Barang::destroy($id);
		
        return redirect('/barang')->with('successDelete', 'Data Barang Berhasil dihapus!');
    }
}
