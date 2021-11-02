<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table = 'tabel_kota';
    protected $fillable = ['nama_kota'];

    public function Users()
    {
	return $this->hasMany('App\Models\TabelUser','id_kota','id');
    }

    public function Suppliers()
    {
	return $this->hasMany('App\Models\Supplier','kode_kota','id');
    }

}
