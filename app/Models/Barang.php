<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'tabel_barang';

    public function jenisBarang()
    {
	return $this->belongsTo('App\Models\jenisBarang','id_jb','id');
    }

    public function hss()
    {
	return $this->hasMany('App\Models\Hs','id_barang','id');
    }

    public function detailBarangs()
    {
	return $this->hasMany('App\Models\detailBarang','id_barang','id');
    }

    public function detailPenerimaans()
    {
	return $this->hasMany('App\Models\detailPenerimaan','id_barang','id');
    }

    public function detailPemesanans()
    {
	return $this->hasMany('App\Models\detailPemesanan','id_barang','id');
    }

}
