<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hs extends Model
{   
    protected $table = 'tabel_hs';

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','id_barang','id');
    }
}
