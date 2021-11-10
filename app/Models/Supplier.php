<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'tabel_supplier';
    protected $fillable = ['nama_sup', 'alamat_sup', 'telp_sup'];

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
	return $this->belongsTo('App\Models\Kota','kode_kota','id');
    }

}
