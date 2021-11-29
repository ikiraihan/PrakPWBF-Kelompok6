<?php

namespace App\Http\Controllers;

use App\Models\TabelUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request -> validate([
            'email'   => 'required|email:dns',
            'password'=> 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        };
        
        return back()->with('loginError', 'Login Gagal!');
    }
}
