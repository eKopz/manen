<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = "keranjang";

    protected $fillable = ['id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function produk()
    {
        $this->belongsToMany('App\Produk', 'keranjang_produk ', 'id_keranjang', 'id_produk')->withPivot('jumlah');
    }
}
