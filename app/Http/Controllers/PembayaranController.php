<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function index(){

        $pembayaran = Pembayaran::with('Penerimaan')->get();
    
        return view('pembayaran/index', [
            'title' => 'Pembayaran Barang',
            'pembayaran' => $pembayaran,
        ]);
    }

    public function create()
    {
        return view('pembayaran.create', [
            'title'     => 'Tambah Pembayaran',
        ]);
    }

    public function store(Request $request)
    {

        $file = $request->file('image');
        $target_dir = "img/uploads/";     //lokasi
        $namafilebaru = time().rand(100,999).".".$file->getClientOriginalExtension(); //nama file baru
        $target_file = $target_dir . basename($_FILES["image"]["name"]);  
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $pembayaran = new Pembayaran;
        $pembayaran->id_penerimaan = $request->id_penerimaan;
        $pembayaran->tgl_bayar = $request->tgl_bayar;
        $pembayaran->total_bayar = $request->total_bayar;
        $pembayaran->image = $namafilebaru;
        $pembayaran->save();

        if ($_FILES["image"]["size"] > 5000) {
            echo "Sorry, your file is too large.";
        }

        $file->move($target_dir,$namafilebaru);

        // Pembayaran::create($validatedData);

        $request->session()->flash('success','Pembayaran Barang Berhasil ditambahkan!');

        return redirect('/pembayaran');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::find($id);
        
        return view('pembayaran.edit',[
            'title'     => 'Edit Data Pembayaran',
            'pembayaran' => $pembayaran,
        ]);
    }

    public function update(Request $request, $id)
    {
        $file = $request->file('image');
        $target_dir = "img/uploads/";     //lokasi
        $namafilebaru = time().rand(100,999).".".$file->getClientOriginalExtension(); //nama file baru
        $target_file = $target_dir . basename($_FILES["image"]["name"]);  
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        Pembayaran::where('id', $id)->update([
            'id_penerimaan' => $request->id_penerimaan,
            'tgl_bayar'     => $request->tgl_bayar,
            'total_bayar'   => $request->total_bayar,
            'image'         => $namafilebaru,
        ]);

        if ($_FILES["image"]["size"] > 5000) {
            echo "Sorry, your file is too large.";
        }

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $file->move($target_dir,$namafilebaru); //untuk mindah lokasi file
        }
        
        $request->session()->flash('success', 'Data Pembayaran Barang Berhasil diupdate!');

        return redirect('/pembayaran');
    }

    public function destroy($id)
    {
        Pembayaran::destroy($id);
		
        return redirect('/pembayaran')->with('successDelete', 'Data Pembayaran Barang Berhasil dihapus!');
    }
}
