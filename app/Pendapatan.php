<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    protected $table = "pendapatan";

    protected $fillable = ['id_petani', 'nominal'];

    public function petani()
    {
        return $this->belongsTo('App\Petani', 'id_petani');
    }
}
