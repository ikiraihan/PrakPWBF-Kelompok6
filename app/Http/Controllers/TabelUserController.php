<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Role;
use App\Models\TabelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TabelUserController extends Controller
{
    public function index(){
        $user = TabelUser::with(['Role','Kota'])->get();

        return view('user/index', [
            'title' => 'User',
            'user' => $user
        ]);
    }

    public function create()
    {
        $role = Role::all();
        $kota = Kota::all();

        return view('user/create', [
            'title' => 'Tambah Data User',
            'role' => $role,
            'kota' => $kota
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required|min:3|max:50',
            'alamat'        => 'required|max:75',
            'id_kota'       => 'required',
            'id_role'       => 'required',
            'email'         => 'required|email:dns|unique:tabel_user',
            'telp'          => 'required|max:20',
            'username'      => 'required|min:3|max:50|unique:tabel_user',
            'password'      => 'required||min:8|max:32'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
    
        TabelUser::create($validatedData);

        $request->session()->flash('success','User Baru Berhasil ditambahkan!');

        return redirect('/user');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::all();
        $kota = Kota::all();
        $user = TabelUser::find($id);
        
        return view('user/edit',[
            'title' => 'Edit Data User',
            'user' => $user,
            'role' => $role,
            'kota' => $kota
        ]);
    }

    public function update(Request $request, $id)
    {
        TabelUser::where('id', $id)->update([
            'name'      => $request->name,
            'alamat'    => $request->alamat,
            'id_kota'   => $request->id_kota,
            'telp'      => $request->telp,
            'email'     => $request->email,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'id_role'   => $request->id_role,
        ]);

        $request->session()->flash('success','Data User Berhasil diupdate!');
        
        return redirect('/user');
    }

    public function destroy($id)
    {
        TabelUser::destroy($id);
		
        return redirect('/user')->with('successDelete', 'Data User Berhasil dihapus!');
    }
}
