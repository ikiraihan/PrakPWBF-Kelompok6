<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelUser extends Model
{
    use HasFactory;
    protected $table = 'tabel_user';

    protected $fillable = [
        'name',
        'alamat',
        'id_kota',
        'email',
        'telp',
        'username',
        'password',
        'id_role',
    ];

    protected $guarded = ['id'];

    protected $hidden = ['password',];

    public function Pemesanans()
    {
	return $this->hasMany('App\Models\Pemesanan','id_user','id');
    }

    public function Penerimaans()
    {
	return $this->hasMany('App\Models\Penerimaan','id_user','id');
    }

    public function Kota()
    {
	return $this->belongsTo('App\Models\Kota','id_kota','id');
    }

    public function Role()
    {
	return $this->belongsTo('App\Models\Role','id_role','id');
    }

}
