<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'tabel_pemesanan';

    public function User()
    {
	return $this->belongsTo('App\Models\TabelUser','id_user','id');
    }
    public function Supplier()
    {
	return $this->belongsTo('App\Models\Supplier','id_sup','id');
    }

    public function detailPemesanans()
    {
	return $this->hasMany('App\Models\DetailPemesanan','id_pesan','id');
    }

}
