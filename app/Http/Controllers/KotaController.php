<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){

        $kota = Kota::all();

        return view('kota.index', [
            'title' => 'Kota Supplier',
            'kota' => $kota
        ]);
    }

    public function create()
    {
        return view('kota.create', [
            'title' => 'Tambah Kota'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kota'  => 'required|max:30',
            'created_at' => date("Y-m-d H:i:s")
        ]);

        Kota::create($validatedData);

        return redirect('/kota');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $kota = Kota::find($id);
        
        return view('kota/edit',[
            'title' => 'Edit Kota',
            'kota' => $kota
        ]);
    }

    public function update(Request $request, $id)
    {
        Kota::where('id', $id)->update([
            'nama_kota' => $request->nama_kota,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/kota');
    }

    public function destroy($id)
    {
        Kota::destroy($id);
		
        return redirect('/kota');
    }
}
