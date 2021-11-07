<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    use HasFactory;
    protected $table = 'tabel_ukuran';

    public function detailBarangs()
    {
	return $this->hasMany('App\Models\DetailBarang','id_ukuran','id');
    }
}
