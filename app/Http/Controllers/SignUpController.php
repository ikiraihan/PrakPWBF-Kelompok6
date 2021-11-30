<?php

namespace App\Http\Controllers;

use App\Models\TabelUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SignUpController extends Controller
{
    public function index(){
        return view('signup.index');
    }
    public function store(Request $request){
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

    $request->session()->flash('success','Registrasi Berhasil! Silahkan Login');

    return redirect('/login');
    }
}
