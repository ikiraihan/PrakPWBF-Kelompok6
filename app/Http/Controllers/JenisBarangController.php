<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('jenisbarang/create',[
            'title' => 'Tambah Jenis Barang'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_barang'  => 'required|max:20',
        ]);

        JenisBarang::create($validatedData);

        $request->session()->flash('success', 'Jenis Barang Baru Berhasil ditambahkan!');

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

    public function update(Request $request, JenisBarang $jenisBarang)
    {
        $validatedData = $request->validate([
            'jenis_barang'  => 'required|max:20',
        ]);

        DB::table('tabel_jb')->where('id', $request->id)->update([
            'jenis_barang' => $request->jenis_barang,
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        JenisBarang::create($validatedData);
        
        $request->session()->flash('success', 'Jenis Barang Berhasil diupdate!');

        return redirect('/jenisbarang');
    }

    public function destroy($id)
    {
        JenisBarang::destroy($id);
		
        return redirect('/jenisbarang')->with('successDelete', 'Jenis Barang Berhasil dihapus!');
    }
}
