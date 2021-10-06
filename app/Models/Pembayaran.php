<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'tabel_pembayaran';
    
    public function Penerimaan()
    {
	return $this->belongsTo('App\Models\Penerimaan','id_terima','id');
    }
}
