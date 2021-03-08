<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            'sayur', 
            'buah',
            'rempah-rempah'
        ];

        $foto = [
            'http://127.0.0.1:8000/images/kategori/sayur.jpg',
            'http://127.0.0.1:8000/images/kategori/buah.jpg',
            'http://127.0.0.1:8000/images/kategori/rempah.jpg'
        ];

        for ($i=0; $i < 3; $i++) { 
            DB::table('kategori')->insert([
                'nama' => $kategori[$i],
                'foto' => $foto[$i],
            ]);
        }
    }
}
