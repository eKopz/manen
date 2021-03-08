<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('umur');
            $table->integer('tekanan');
            $table->integer('kelembapan');
            $table->integer('temperatur');
            $table->integer('titik_embun');
            $table->integer('sinar_uv');
            $table->integer('berat');
            $table->integer('harga_jual');
            $table->integer('harga_beli');
            $table->integer('stok');
            $table->string('deskripsi', 1000);
            $table->string('foto');
            $table->unsignedBigInteger('id_kategori');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
