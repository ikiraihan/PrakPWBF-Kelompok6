<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'tabel_supplier';

    public function Penerimaans()
    {
	return $this->hasMany('App\Models\Penerimaan','id_sup','id');
    }
    public function Pemesanans()
    {
	return $this->hasMany('App\Models\Pemesanan','id_sup','id');
    }

    public function Kota()
    {
	return $this->belongsTo('App\Models\Kota','id_kota','id');
    }

}
