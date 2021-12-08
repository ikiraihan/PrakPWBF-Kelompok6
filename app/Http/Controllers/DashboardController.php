<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard/index', [
            'title' => 'Dashboard | Pemilik'
        ]);
    }

    public function pegawai(){
        return view('pegawai/index', [
            'title' => 'Dashboard | Pegawai'
        ]);
    }
}
