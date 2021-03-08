<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananProduk extends Model
{
    protected $table = "pesanan_produk";

    protected $fillable = ['id_pesanan', 'id_produk', 'jumlah'];

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }
}
