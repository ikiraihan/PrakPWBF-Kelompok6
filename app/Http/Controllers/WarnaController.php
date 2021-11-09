<?php

namespace App\Http\Controllers;

use App\Models\Warna;
use Illuminate\Http\Request;

class WarnaController extends Controller
{
    public function index(){
        $warna = Warna::all();
        return view('warna/index', [
            'title' => 'Warna Barang',
            'warna' => $warna
        ]);
    }

    public function create()
    {
        return view('warna/tambah', [
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
}
