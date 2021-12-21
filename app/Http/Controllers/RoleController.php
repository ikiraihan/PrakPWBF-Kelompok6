<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $role=Role::all();

        return view('role/index', [
            'title' => 'Role Users',
            'role' => $role
        ]);
    }

    public function create()
    {
        return view('role/create', [
            'title' => 'Tambah Role'
        ]);
    }

    public function store(Request $request)
    {
        Role::create([
            'jenis_role' => $request->jenis_role,
            'created_at' => date("Y-m-d H:i:s")
        ]);

        $request->session()->flash('success', 'Role User Baru Berhasil ditambahkan!');

        return redirect('/role');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $role = Role::find($id);
        
        return view('role/edit',[
            'title' => 'Edit Role',
            'role' => $role
        ]);
    }

    public function update(Request $request, $id)
    {
        Role::where('id', $id)->update([
            'jenis_role' => $request->jenis_role,
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        $request->session()->flash('success', 'Role User Berhasil diupdate!');

        return redirect('/role');
    }

    public function destroy($id)
    {
        Role::destroy($id);
		
        return redirect('/role')->with('successDelete', 'Role User Berhasil dihapus!');
    }
}
