<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    protected $table = 'tabel_detail_pemesanan';

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','id_barang','id');
    }

    public function Pemesanan()
    {
	return $this->belongsTo('App\Models\Pemesanan','id_pesan','id');
    }
}
