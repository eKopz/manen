<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    protected $table = "panen";

    protected $fillable = ['id_petani', 'id_produk', 'jumlah', 'status'];

    public function petani()
    {
        return $this->belongsTo('App\Petani', 'id_petani');
    }

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }

    public function gudang()
    {
        return $this->hasMany('App\Gudang');
    }
}
