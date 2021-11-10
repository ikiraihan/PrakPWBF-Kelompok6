<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::with('Kota')->get();

        return view('supplier/index', [
            'title' => 'Supplier',
            'supplier' => $supplier
        ]);
    }

    public function create()
    {
        $kota = Kota::all();

        return view('supplier/create', [
            'title' => 'Tambah Data Supplier',
            'kota' => $kota
        ]);
    }

    public function store(Request $request)
    {
        Supplier::create([
            'nama_sup' => $request->nama_sup,
            'alamat_sup' => $request->alamat_sup,
            'kode_kota' => $request->kode_kota,
            'telp_sup' => $request->telp_sup,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/supplier');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kota = Kota::all();
        $supplier = Supplier::find($id);
        
        return view('supplier/edit',[
            'title' => 'Edit Data Supplier',
            'supplier' => $supplier,
            'kota' => $kota
        ]);
    }

    public function update(Request $request, $id)
    {
        Supplier::where('id', $id)->update([
            'nama_sup' => $request->nama_sup,
            'alamat_sup' => $request->alamat_sup,
            'kode_kota' => $request->kode_kota,
            'telp_sup' => $request->telp_sup,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/supplier');
    }

    public function destroy($id)
    {
        Supplier::destroy($id);
		
        return redirect('/supplier');
    }
}
