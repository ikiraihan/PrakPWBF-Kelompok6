<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tabel_barang';

    public function jenisBarang()
    {
	return $this->belongsTo('App\Models\JenisBarang','id_jb','id');
    }

    public function hss()
    {
	return $this->hasMany('App\Models\Hs','kode_bar','id');
    }

    public function detailBarangs()
    {
	return $this->hasMany('App\Models\DetailBarang','kode_bar','id');
    }

    public function detailPenerimaans()
    {
	return $this->hasMany('App\Models\detailPenerimaan','kode_barang','id');
    }

    public function detailPemesanans()
    {
	return $this->hasMany('App\Models\detailPemesanan','kode_barang','id');
    }

}
