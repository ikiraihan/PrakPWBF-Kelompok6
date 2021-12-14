<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'tabel_pemesanan';
    protected $fillable = ['user_id', 'sup_id', 'stok_barang', 'tgl_pesan', 'status_pesan'];


    public function User()
    {
	return $this->belongsTo('App\Models\TabelUser','user_id','id');
    }
    public function Supplier()
    {
	return $this->belongsTo('App\Models\Supplier','sup_id','id');
    }

    public function detailPemesanans()
    {
	return $this->hasMany('App\Models\DetailPemesanan','id_pesan','id');
    }

}
