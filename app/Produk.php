<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "produk";

    protected $fillable = ['nama', 'umur', 'tekanan', 'kelembapan', 'temperatur', 'titik embun', 'sinar_uv', 'berat', 'harga_jual', 'harga_beli', 'stok', 'deskripsi', 'foto', 'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    public function tanaman_petani()
    {
        return $this->hasMany('App\TanamanPetani');
    }

    public function panen()
    {
        return $this->hasMany('App\Panen');
    }

    public function keranjang()
    {
        return $this->belongsToMany('App\Keranjang', 'keranjang_produk', 'id_produk', 'id_keranjang');
    }

    public function pesanan()
    {
        return $this->belongsToMany('App\Pesanan', 'pesanan_produk', 'id_produk', 'id_pesanan');
    }

    public function keranjang_produk()
    {
        return $this->hasMany('App\KeranjangProduk');
    }

    public function pesanan_produk()
    {
        return $this->hasMany('App\PesananProduk');
    }


}
