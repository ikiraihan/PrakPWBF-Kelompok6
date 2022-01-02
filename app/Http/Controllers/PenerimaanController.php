<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use App\Models\TabelUser;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index(){
        $penerimaan = Penerimaan::with(['User','Supplier'])->get();
    
        return view('penerimaan/index', [
            'title' => 'Penerimaan Barang',
            'penerimaan' => $penerimaan,
        ]);
    }

    public function create()
    {
        $user = TabelUser::all();
        $supplier = Supplier::all();
        
        return view('penerimaan.create', [
            'title'     => 'Tambah Penerimaan Barang',
            'user'      => $user,
            'supplier'  => $supplier,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_user'     => 'required',
            'kode_sup'      => 'required',
            'tgl_terima'    => 'required',
            'total_harga'   => 'required|max:11',
            'status_terima' => 'required|max:20',
            'created_at'    => date("Y-m-d H:i:s"),
        ]);

        Penerimaan::create($validatedData);

        $request->session()->flash('success','Penerimaan Barang Berhasil ditambahkan!');

        return redirect('/penerimaan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user       = TabelUser::all();
        $supplier   = Supplier::all();
        $penerimaan  = Penerimaan::find($id);
        
        return view('penerimaan/edit',[
            'title'      => 'Edit Penerimaan Barang',
            'penerimaan' => $penerimaan,
            'user'       => $user,
            'supplier'   => $supplier,
        ]);
    }

    public function update(Request $request, $id)
    {
        Penerimaan::where('id', $id)->update([
            'tgl_terima'    => $request->tgl_terima,
            'total_harga'   => $request->total_harga,
            'status_terima' => $request->status_terima,
            'kode_sup'      => $request->kode_sup,
            'updated_at'    => date("Y-m-d H:i:s"),
        ]);

        $request->session()->flash('success','Penerimaan Barang Berhasil diupdate!');
        
        return redirect('/penerimaan');
    }

    public function destroy($id)
    {
        Penerimaan::destroy($id);
		
        return redirect('/penerimaan')->with('successDelete', 'Data Penerimaan Barang Berhasil dihapus!');
    }

}
