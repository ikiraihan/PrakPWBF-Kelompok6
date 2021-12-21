<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Hs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HsController extends Controller
{
    public function index(Barang $id){

        return view('hs.index', [
            'hs'    => Hs::where('kode_bar', $id->id)->with('Barang')->get(),
            'barang' => $id,
            'title' => 'Histori Stok',
        ]);
    }

    public function create($id)
    {
        return view('hs.create', [
            'barang' => Barang::find($id),
            'title' => 'Tambah Histori Stok',
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

        $request->session()->flash('success','Histori Stok Berhasil Ditambahkan');

        return redirect('/barang');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        return view('hs.edit',[
            'hs'      => Hs::find($id),
            'barang'  => Barang::all(),
            'title'   => 'Edit Histori Stok',
        ]);
    }

    public function update(Request $request)
    {
        DB::table('tabel_hs')->where('id',$request['id'])->update([
            'kode_bar'          => $request->kode_bar,
            'tgl_hs'            => $request->tgl_hs,
            'update_stok_hs'    => $request->update_stok_hs,
            'status'            => $request->status,
        ]);
        
        $request->session()->flash('success', 'Data Histori Stok Barang Berhasil diupdate!');

        return redirect('/barang');
    }

    public function destroy($id)
    {
        Hs::destroy($id);
		
        return redirect('/barang')->with('successDelete', 'Data Histori Stok Barang Berhasil dihapus!');
    }
}
