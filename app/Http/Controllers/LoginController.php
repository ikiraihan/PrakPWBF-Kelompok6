<?php

namespace App\Http\Controllers;

use App\Models\TabelUser;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            "title" => "login"
    ]);
    }
    public function authenticate(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return back()->with('loginError', 'Login Gagal!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
