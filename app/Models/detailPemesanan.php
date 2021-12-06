<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    use HasFactory;
    protected $table = 'detail_pemesanan';
    protected $fillable = ['kode_bar', 'id_pesan', 'jumlah_up', 'harga_up'];

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','kode_bar','id');
    }

    public function Pemesanan()
    {
	return $this->belongsTo('App\Models\Pemesanan','id_pesan','id');
    }
}
