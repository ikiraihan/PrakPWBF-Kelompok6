<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    use HasFactory;
    protected $table = 'tabel_jb';
    protected $fillable = ['jenis_barang'];
    
    public function Barangs()
    {
	return $this->hasMany('App\Models\Barang','id_jb','id');
    }

}
