<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){

        $pembayaran = Pembayaran::with('Penerimaan')->get();
    
        return view('pembayaran/index', [
            'title' => 'Pembayaran Barang',
            'pembayaran' => $pembayaran,
        ]);
    }

    public function create()
    {
        $penerimaan = Penerimaan::all();

        return view('pembayaran.create', [
            'title'     => 'Tambah Pembayaran',
            'penerimaan'  => $penerimaan,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_penerimaan' => 'required',
            'tgl_bayar'     => 'required',
            'total_bayar'   => 'required|max:225',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        Pembayaran::create($validatedData);

        $request->session()->flash('success','Pembayaran Barang Berhasil ditambahkan!');

        return redirect('/pembayaran');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        
        return view('pembayaran.edit',[
            'title'     => 'Edit Data Pembayaran',
            'pembayaran' => $pembayaran,
        ]);
    }

    public function update(Request $request, $id)
    {
        Pembayaran::where('id', $id)->update([
            'id_penerimaan' => $request->id_penerimaan,
            'tgl_bayar'     => $request->tgl_bayar,
            'total_bayar'   => $request->total_bayar,
            'updated_at'    => date("Y-m-d H:i:s")
        ]);
        
        $request->session()->flash('success', 'Data Pembayaran Barang Berhasil diupdate!');

        return redirect('/pembayaran');
    }

    public function destroy($id)
    {
        Pembayaran::destroy($id);
		
        return redirect('/pembayaran')->with('successDelete', 'Data Pembayaran Barang Berhasil dihapus!');
    }
}
