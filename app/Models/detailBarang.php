<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    protected $table = 'tabel_detail_barang';

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','id_barang','id');
    }

    public function Warna()
    {
	return $this->belongsTo('App\Models\Warna','id_warna','id');
    }
    
    public function Ukuran()
    {
	return $this->belongsTo('App\Models\Barang','id_ukuran','id');
    }

}
