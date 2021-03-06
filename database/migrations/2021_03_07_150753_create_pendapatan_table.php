<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendapatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_petani');
            $table->integer('nominal');
            $table->timestamps();

            $table->foreign('id_petani')->references('id')->on('petani');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendapatan');
    }
}
