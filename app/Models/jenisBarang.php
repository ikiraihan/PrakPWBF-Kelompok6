<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisBarang extends Model
{
    protected $table = 'tabel_jb';
    
    public function Barangs()
    {
	return $this->hasMany('App\Models\Barang','id_jb','id');
    }

}
