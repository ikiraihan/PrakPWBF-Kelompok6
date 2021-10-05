<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_barang', function (Blueprint $table) {
            $table->char('kode_bar', 5);
            $table->char('id_jb', 5);
            $table->string('nama_barang', 20);
            $table->integer('strok_barang');
            $table->integer('harga_beli_barang');
            $table->integer('harga_jual_barang');
            $table->primary(['kode_bar','id_jb']);
            $table->foreign('id_jb')->references('id_jb')->on('table_jb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_barang');
    }
}
