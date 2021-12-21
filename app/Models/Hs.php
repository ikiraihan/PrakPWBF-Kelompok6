<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hs extends Model
{   
    use HasFactory;
    protected $table = 'tabel_hs';
    protected $fillable = ['kode_bar','tgl_hs','update_stok_hs','status'];

    public function Barang()
    {
	return $this->belongsTo('App\Models\Barang','kode_bar','id');
    }
}
