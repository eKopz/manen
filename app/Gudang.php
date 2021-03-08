<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = "gudang";

    protected $fillable = ['id_panen', 'jumlah', 'status'];

    public function panen()
    {
        return $this->belongsTo('App\Panen', 'id_panen');
    }
}
