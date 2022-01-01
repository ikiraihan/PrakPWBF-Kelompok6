<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $penerimaan = Penerimaan::all();
        $pembayaran = Pembayaran::all();

        return view('pembayaran.create', [
            'title'     => 'Tambah Pembayaran',
            'penerimaan'  => $penerimaan,
            'pembayaran' => $pembayaran,
        ]);
    }

    public function store(Request $request)
    {

        $bukti = $request->image;
        $namafile = time().rand(100,999).".".$bukti->getClientOriginalExtension();
        // $validatedData = $request->validate([
        //     'id_penerimaan' => 'required',
        //     'tgl_bayar'     => 'required',
        //     'total_bayar'   => 'required|max:225',
        //     'image'         => 'image|file|max:5024',$namafile,
        // ]);

        // $file = $request->file('image');
        // $target_dir = "img/uploads/"; //lokasi
        // $target_file = $target_dir . basename($_FILES["image"]["name"]); //tempat lokasi

        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // //function pemindahan file
        // $file->move($target_dir,$file->getClientOriginalName());

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('upload');
        // }

        // DB::table('tabel_pembayaran')([
        //     'id_penerimaan' => $request->name,
        //     'tgl_bayar'     => $request->tgl_lhr,
        //     'total_bayar'   => $request->kota_lhr,
        //     'image'         => $namafile,
        // ]);
        
        $pembayaran = new Pembayaran;
        $pembayaran->id_penerimaan = $request->id_penerimaan;
        $pembayaran->tgl_bayar = $request->tgl_bayar;
        $pembayaran->total_bayar = $request->total_bayar;
        $pembayaran->image = $namafile;
        $pembayaran->save();

        $bukti->move(public_path().'/img/uploads', $namafile);

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
        //untuk mindah lokasi file
        $file->move($target_dir,$namafilebaru);
        
        Pembayaran::where('id', $id)->update([
            'id_penerimaan' => $request->id_penerimaan,
            'tgl_bayar'     => $request->tgl_bayar,
            'total_bayar'   => $request->total_bayar,
            'image'         => $namafilebaru,
        ]);

        if ($_FILES["image"]["size"] > 5000) {
            echo "Sorry, your file is too large.";
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
