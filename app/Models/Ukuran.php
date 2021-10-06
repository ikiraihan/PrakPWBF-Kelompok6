<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    protected $table = 'tabel_ukuran';

    public function detailBarangs()
    {
	return $this->hasMany('App\Models\detailBarang','id_ukuran','id');
    }
}
