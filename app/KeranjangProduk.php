<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeranjangProduk extends Model
{
    protected $table = "keranjang_produk";
    protected $fillable = ['id_produk', 'id_keranjang', 'jumlah'];

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }

}
