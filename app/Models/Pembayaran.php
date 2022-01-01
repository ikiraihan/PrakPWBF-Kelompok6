<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'tabel_pembayaran';
    protected $fillable = ['id_penerimaan','tgl_bayar','total_bayar', 'image'];
    
    public function Penerimaan()
    {
	return $this->belongsTo('App\Models\Penerimaan','id_penerimaan','id');
    }
}
