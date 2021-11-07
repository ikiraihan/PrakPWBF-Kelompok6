<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenerimaan extends Model
{
    use HasFactory;
    protected $table = 'detail_penerimaan';

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','kode_barang','id');
    }
    public function Penerimaan()
    {
	return $this->belongsTo('App\Models\Penerimaan','id_terima','id');
    }
}
