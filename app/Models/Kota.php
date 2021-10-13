<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'tabel_kota';

    public function Users()
    {
	return $this->hasMany('App\Models\Tabel_user','id_kota','id');
    }

    public function Suppliers()
    {
	return $this->hasMany('App\Models\Supplier','id_kota','id');
    }

}
