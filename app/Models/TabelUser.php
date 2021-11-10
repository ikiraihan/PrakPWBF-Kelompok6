<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelUser extends Model
{
    use HasFactory;
    protected $table = 'tabel_user';

    protected $fillable = [
        'nama_user',
        'alamat_user',
        'id_kota',
        'email_user',
        'telp_user',
        'username_user',
        'password_user',
        'id_role',
    ];

    protected $hidden = ['password_user',];

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
