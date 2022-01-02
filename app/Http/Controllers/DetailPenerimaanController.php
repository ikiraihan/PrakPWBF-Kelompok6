<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Penerimaan;
use App\Models\detailPenerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailPenerimaanController extends Controller
{
    public function index(Penerimaan $id){

        return view('detailPenerimaan.index', [
            'title' => 'Detail Penerimaan',
            'detterima' => detailPenerimaan::where('id_terima', $id->id)->with('Penerimaan')->get(),
            'penerimaan' => $id,
        ]);
    }

    public function create($id)
    {
        return view('detailPenerimaan.create', [
            'title' => 'Tambah Detail Penerimaan',
            'penerimaan' => Penerimaan::find($id),
            'barang' => Barang::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_terima' => 'required',
            'kode_barang'  => 'required',
            'jumlah_his' => 'required',
            'harga_his' => 'required',
            'sub_total' => 'required',
        ]);

        detailPenerimaan::create($validatedData);

        $request->session()->flash('success', 'Detail Penerimaan Barang Berhasil ditambahkan!');

        return redirect('/penerimaan');
    }
    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        return view('detailPenerimaan.edit',[
            'detterima' => detailPenerimaan::find($id),
            'barang'  => Barang::all(),
            'title'   => 'Edit Detail Penerimaan',
        ]);
    }

    public function update(Request $request)
    {
        DB::table('detail_penerimaan')->where('id',$request['id'])->update([
            'id_terima'  => $request->id_terima,
            'kode_barang'  => $request->kode_barang,
            'jumlah_his'=> $request->jumlah_his,
            'harga_his' => $request->harga_his,
            'sub_total' => $request->sub_total,
        ]);
        
        $request->session()->flash('success', 'Detail Penerimaan Barang Berhasil diupdate!');

        return redirect('/penerimaan');
    }

    public function destroy($id)
    {
        detailPenerimaan::destroy($id);
		
        return redirect('/penerimaan')->with('successDelete', 'Detail Penerimaan Barang Berhasil dihapus!');
    }
}
