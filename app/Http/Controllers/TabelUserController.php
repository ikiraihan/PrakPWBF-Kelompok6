<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Role;
use App\Models\TabelUser;
use Illuminate\Http\Request;

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
        TabelUser::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'id_kota' => $request->id_kota,
            'telp' => $request->telp,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'id_role' => $request->id_role,
            'created_at' => date("Y-m-d H:i:s")
        ]);
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
            'name' => $request->name,
            'alamat' => $request->alamat,
            'id_kota' => $request->id_kota,
            'telp' => $request->telp,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'id_role' => $request->id_role,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        return redirect('/user');
    }

    public function destroy($id)
    {
        TabelUser::destroy($id);
		
        return redirect('/user');
    }
}
