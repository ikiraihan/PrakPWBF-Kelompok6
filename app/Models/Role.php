<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'tabel_role';

    public function Users()
    {
	return $this->hasMany('App\Models\Tabel_user','id_role','id');
    }
}
