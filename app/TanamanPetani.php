<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanamanPetani extends Model
{
    protected $table = "tanaman_petani";

    protected $fillable = ['id_produk', 'id_petani', 'mulai_tanam'];

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'id_produk');
    }

    public function petani()
    {
        return $this->belongsTo('App\Petani', 'id_petani');
    }
}
