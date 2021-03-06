<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'tabel_role';
    protected $fillable = ['jenis_role'];

    public function Users()
    {
	return $this->hasMany('App\Models\TabelUser','id_role','id');
    }
}
