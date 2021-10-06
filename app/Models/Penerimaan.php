<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 'tabel_penerimaan';

    public function User()
    {
	return $this->belongsTo('App\Models\Tabel_user','id_user','id');
    }

    public function Supplier()
    {
	return $this->belongsTo('App\Models\Supplier','id_sup','id');
    }

    public function detailPenerimaans()
    {
	return $this->hasMany('App\Models\detailPenerimaan','id_terima','id');
    }

    public function Pembayaran()
    {
	return $this->belongsTo('App\Models\Pembayaran','id_terima','id');
    }
}
