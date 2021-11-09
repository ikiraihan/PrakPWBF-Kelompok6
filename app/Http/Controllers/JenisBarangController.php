<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index(){
        $jenis_barang = JenisBarang::all();

        return view('jenisbarang/index', [
            'title' => 'Jenis Barang',
            'jenis_barang' => $jenis_barang
        ]);
    }

    public function create()
    {
        return view('jenisbarang/tambah');
    }

    public function store(Request $request)
    {
        JenisBarang::create([
            'jenis_barang' => $request->jenis_barang,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/jenisbarang');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jenis_barang = JenisBarang::find($id);
        
        return view('jenisbarang/edit',[
            'title' => 'Edit Jenis Barang',
            'jenis_barang' => $jenis_barang
        ]);
    }

    public function update(Request $request, $id)
    {
        JenisBarang::where('id', $id)->update([
            'jenis_barang' => $request->jenis_barang,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/jenisbarang');
    }

    public function destroy($id)
    {
        JenisBarang::destroy($id);
		
        return redirect('/jenisbarang');
    }
}
