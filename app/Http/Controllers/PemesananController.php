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
            'title'     => 'Pemesanan Pemesanan',
            'pemesanan' => $pemesanan,
        ]);
    }

    public function create()
    {
        $user = TabelUser::all();
        $supplier = Supplier::all();
        $pemesanan = Pemesanan::with(['User','Supplier','detailPemesanans'])->get();

        return view('pemesanan.create', [
            'title'     => 'Tambah Pemesanan',
            'user'      => $user,
            'supplier'  => $supplier,
            'pemesanan'  => $pemesanan,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tgl_pesan'     => 'required',
            'status_pesan'  => 'required|max:10',
            'user_id'       => 'required',
            'sup_id'        => 'required',
            'created_at'    => date("Y-m-d H:i:s")
        ]);

        Pemesanan::create($validatedData);

        $request->session()->flash('success','Pemesanan Barang Berhasil ditambahkan!');

        return redirect('/pemesanan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user       = TabelUser::all();
        $supplier   = Supplier::all();
        $pemesanan  = Pemesanan::find($id);
        
        return view('pemesanan/edit',[
            'title'     => 'Edit Data Pemesanan',
            'pemesanan' => $pemesanan,
            'user'      => $user,
            'supplier'  => $supplier,
        ]);
    }

    public function update(Request $request, $id)
    {
        Pemesanan::where('id', $id)->update([
            'tgl_pesan'    => $request->tgl_pesan,
            'status_pesan' => $request->status_pesan,
            'user_id'    => $request->user_id,
            'sup_id'    => $request->sup_id,
            'updated_at'   => date("Y-m-d H:i:s"),
        ]);

        $request->session()->flash('success','Pemesanan Barang Berhasil diupdate!');
        
        return redirect('/pemesanan');
    }

    public function destroy($id)
    {
        Pemesanan::destroy($id);
		
        return redirect('/pemesanan')->with('successDelete', 'Data Pemesanan Barang Berhasil dihapus!');
    }
}
