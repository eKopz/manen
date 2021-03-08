<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

    protected $fillable = ['nama', 'foto'];

    public function produk()
    {
        return $this->hasMany('App\Produk');
    }
}
