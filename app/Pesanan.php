<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = "pesanan";

    protected $fillable = ['id_user', 'alamat', 'notlp',' kodepos', 'status', 'total', 'bukti_pembayaran'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function produk()
    {
        $this->belongsToMany('App\Produk', 'pesanan_produk ', 'id_pesanan', 'id_produk')->withPivot('jumlah');
    }
}
