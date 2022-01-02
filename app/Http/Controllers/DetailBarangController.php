<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use App\Models\Warna;
use App\Models\Barang;
use App\Models\detailBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailBarangController extends Controller
{
    public function index(Barang $id)
    {
    
        return view('detailBarang.index', [
            'detailbar' => detailBarang::where('kode_bar', $id->id)->with('Barang')->get(),
            'barang' => $id,
            'title' => 'Detail Barang',
        ]);
    }

    public function create($id)
    {
        $ukuran = Ukuran::all();
        $warna = Warna::all();

        return view('detailBarang.create', [
            'title' => 'Tambah Detail Barang',
            'barang' => Barang::find($id),
            'ukuran' => $ukuran,
            'warna' => $warna,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_bar'  => 'required',
            'id_warna'  => 'required',
            'id_ukuran' => 'required',
        ]);

        detailBarang::create($validatedData);

        $request->session()->flash('success','Detail Barang Berhasil Ditambahkan');

        return redirect('/barang');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ukuran = Ukuran::all();
        $warna = Warna::all();

        return view('detailBarang.edit',[
            'detbar'    => detailBarang::find($id),
            'barang'    => Barang::all(),
            'ukuran'    => $ukuran,
            'warna'     => $warna,
            'title'     => 'Edit Detail Barang',
        ]);
    }

    public function update(Request $request)
    {
        DB::table('detail_barang')->where('id',$request['id'])->update([
            'kode_bar'     => $request->kode_bar,
            'id_warna'     => $request->id_warna,
            'id_ukuran'    => $request->id_ukuran,
        ]);
        
        $request->session()->flash('success', 'Detail Barang Berhasil diupdate!');

        return redirect('/barang');
    }

    public function destroy($id)
    {
        detailBarang::destroy($id);
		
        return redirect('/barang')->with('successDelete', 'Detail Barang Berhasil dihapus!');
    }
}
