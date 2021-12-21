<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use Illuminate\Http\Request;

class UkuranController extends Controller
{
    public function index(){
        $ukuran = Ukuran::all();
        return view('ukuran/index', [
            'title' => 'Data Ukuran',
            'ukuran' => $ukuran]);
    }

    public function create()
    {
        return view('ukuran/create', [
            'title' => 'Tambah Ukuran'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ukuran'  => 'required|max:3',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Ukuran::create($validatedData);

        $request->session()->flash('success', 'Data Ukuran Berhasil ditambahkan!');

        return redirect('/ukuran');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ukuran = Ukuran::find($id);
        
        return view('ukuran/edit',[
            'title' => 'Edit Ukuran Barang',
            'ukuran' => $ukuran
        ]);
    }

    public function update(Request $request, $id)
    {
        Ukuran::where('id', $id)->update([
            'ukuran' => $request->ukuran,
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        $request->session()->flash('success', 'Data Ukuran Berhasil diupdate!');
        
        return redirect('/ukuran');
    }

    public function destroy($id)
    {
        Ukuran::destroy($id);
		
        return redirect('/ukuran')->with('successDelete', 'Data Ukuran Berhasil dihapus!');
    }
}
