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
            'kode_bar'      => 'required',
            'tgl_hs'        => 'required',
            'update_stok_hs'=> 'required',
            'status'        => 'required|max:20',
        ]);

        Hs::create($validatedData);

        $request->session()->flash('successHistoriStok','Histori Stok Berhasil Ditambahkan');

        return redirect('/barang');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pembayaran = Hs::find($id);
        
        return view('pembayaran.edit',[
            'title'     => 'Edit Histori Stok',
            'pembayaran' => $pembayaran,
        ]);
    }

    public function update(Request $request, $id)
    {
        Hs::where('id', $id)->update([
            'id_penerimaan' => $request->id_penerimaan,
            'tgl_bayar'     => $request->tgl_bayar,
            'total_bayar'   => $request->total_bayar,
            'updated_at'    => date("Y-m-d H:i:s")
        ]);
        
        $request->session()->flash('success', 'Data Hs Barang Berhasil diupdate!');

        return redirect('/pembayaran');
    }

    public function destroy($id)
    {
        Hs::destroy($id);
		
        return redirect('/pembayaran')->with('successDelete', 'Data Hs Barang Berhasil dihapus!');
    }
}
