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
        return view('ukuran/tambah', [
            'title' => 'Tambah Ukuran'
        ]);
    }

    public function store(Request $request)
    {
        Ukuran::create([
            'ukuran' => $request->ukuran,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/ukuran');
    }

    public function show($id)
    {
        //
    }
}
