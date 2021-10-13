<?php

namespace App\Http\Controllers;

use App\Models\Hs;
use Illuminate\Http\Request;

class HsController extends Controller
{
    public function hs(){
        $hs = Hs::all();
    }
}
