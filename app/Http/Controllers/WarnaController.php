<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    public function index()
    {
        $warna = Warna::all();

        return view('warna/index', [
            'title' => 'Warna Barang',
            'warna' => $warna
        ]);
    }

    public function create()
    {
        return view('warna/create', [
            'title' => 'Tambah Warna'
        ]);
    }

    public function store(Request $request)
    {
        Warna::create([
            'warna' => $request->warna,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/warna');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $warna = Warna::find($id);
        
        return view('warna/edit',[
            'title' => 'Edit Warna Barang',
            'warna' => $warna
        ]);
    }

    public function update(Request $request, $id)
    {
        Warna::where('id', $id)->update([
            'warna' => $request->warna,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/warna');
    }

    public function destroy($id)
    {
        Warna::destroy($id);
		
        return redirect('/warna');
    }
}
