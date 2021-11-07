<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    use HasFactory;
    protected $table = 'tabel_warna';

    public function detailBarangs()
    {
	return $this->hasMany('App\Models\DetailBarang','id_warna','id');
    }
}
