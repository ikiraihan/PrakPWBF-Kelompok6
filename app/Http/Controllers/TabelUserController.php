<?php

namespace App\Http\Controllers;

use App\Models\Tabel_user;
use Illuminate\Http\Request;

class TabelUserController extends Controller
{
    public function tabelUser(){
        $tabelUser = Tabel_user::all();
    }
}
