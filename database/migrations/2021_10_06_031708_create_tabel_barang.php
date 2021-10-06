<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 20);
            $table->integer('strok_barang');
            $table->integer('harga_beli_barang');
            $table->integer('harga_jual_barang');
            $table->timestamps();
        });
        
        Schema::table('tabel_barang', function (Blueprint $table) {
                $table->foreignId('id_jb')->constrained('tabel_jb');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_barang');
    }
}
