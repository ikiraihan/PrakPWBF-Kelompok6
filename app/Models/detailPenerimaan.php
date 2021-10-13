<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenerimaan extends Model
{
    protected $table = 'tabel_detail_penerimaan';

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','id_barang','id');
    }
    public function Penerimaan()
    {
	return $this->belongsTo('App\Models\Penerimaan','id_terima','id');
    }
}
