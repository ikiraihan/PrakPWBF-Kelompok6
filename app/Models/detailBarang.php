<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    use HasFactory;
    protected $table = 'detail_barang';
    protected $fillable = ['kode_bar','id_warna','id_ukuran'];

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
