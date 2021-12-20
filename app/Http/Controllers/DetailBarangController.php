<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use App\Models\Warna;
use App\Models\Barang;
use App\Models\DetailBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailBarangController extends Controller
{
    public function index(Barang $id)
    {
        $detbar = DetailBarang::with(['Barang', 'Warna', 'Ukuran'])->get();
    
        return view('detailBarang.index', [
            'title' => 'Detail Barang',
            'detbar' => $detbar,
            'detailbar' => DetailBarang::where('kode_bar', $id->id)->with('Barang')->get(),
            'barang' => $id,
        ]);
    }

    public function create($id)
    {
        $ukuran = Ukuran::all();
        $warna = Warna::all();

        return view('detailBarang.create', [
            'title' => 'Tambah Detail Pemesanan',
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

        DetailBarang::create($validatedData);

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

        return view('detailbarang.edit',[
            'detbar'    => DetailBarang::find($id),
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
        DetailBarang::destroy($id);
		
        return redirect('/barang')->with('successDelete', 'Detail Barang Berhasil dihapus!');
    }
}
