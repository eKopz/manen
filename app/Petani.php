<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    protected $table = "petani";

    protected $fillable = ['id_user', 'no_rek'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function tanaman_petani()
    {
        return $this->hasMany('App\TanamanPetani');
    }

    public function panen()
    {
        return $this->hasMany('App\Panen');
    }

    public function pendapatan()
    {
        return $this->hasMany('App\Pendapatan');
    }
}
