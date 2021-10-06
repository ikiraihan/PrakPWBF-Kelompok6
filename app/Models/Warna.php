<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table = 'tabel_warna';

    public function detailBarangs()
    {
	return $this->hasMany('App\Models\detailBarang','id_warna','id');
    }
}
