<?php

namespace App\Http\Controllers;

use App\Models\detailPemesanan;
use App\Models\Barang;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailPemesananController extends Controller
{
    public function index(Pemesanan $id){

        return view('detailPemesanan.index', [
            'detpesan' => detailPemesanan::where('id_pesan', $id->id)->with('Pemesanan')->get(),
            'pemesanan' => $id,
            'title' => 'Detail Pemesanan',

        ]);
    }

    public function create($id)
    {
        
        return view('detailPemesanan.create', [
            'title' => 'Tambah Detail Pemesanan',
            'pemesanan' => Pemesanan::find($id),
            'barang' => Barang::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pesan' => 'required',
            'kode_bar'  => 'required',
            'jumlah_up' => 'required',
            'harga_up' => 'required',
        ]);

        detailPemesanan::create($validatedData);

        $request->session()->flash('success','Detail Pemesanan Barang Berhasil Ditambahkan');

        return redirect('/pemesanan');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        return view('detailPemesanan.edit',[
            'detpesan' => detailPemesanan::find($id),
            'barang'  => Barang::all(),
            'title'   => 'Edit Detail Pemesanan',
        ]);
    }

    public function update(Request $request)
    {
        DB::table('detail_pemesanan')->where('id',$request['id'])->update([
            'id_pesan'     => $request->id_pesan,
            'kode_bar'     => $request->kode_bar,
            'jumlah_up'    => $request->jumlah_up,
            'harga_up'     => $request->harga_up,
        ]);
        
        $request->session()->flash('success', 'Detail Pemesanan Barang Berhasil diupdate!');

        return redirect('/pemesanan');
    }

    public function destroy($id)
    {
        detailPemesanan::destroy($id);
		
        return redirect('/pemesanan')->with('successDelete', 'Detail Pemesanan Barang Berhasil dihapus!');
    }
}
