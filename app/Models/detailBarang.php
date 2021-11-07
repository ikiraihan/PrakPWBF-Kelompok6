<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    use HasFactory;
    protected $table = 'detail_barang';

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','kode_bar','id');
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
