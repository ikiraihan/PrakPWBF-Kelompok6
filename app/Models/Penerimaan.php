<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;
    protected $table = 'tabel_penerimaan';
    protected $fillable = ['kode_user', 'kode_sup', 'tgl_terima','total_harga', 'status_terima', 'id_terima'];


    public function User()
    {
	return $this->belongsTo('App\Models\TabelUser','kode_user','id');
    }

    public function Supplier()
    {
	return $this->belongsTo('App\Models\Supplier','kode_sup','id');
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
