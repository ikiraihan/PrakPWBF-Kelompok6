<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_barang', function (Blueprint $table) {
            
            $table->timestamps();
        });
            Schema::table('detail_barang', function (Blueprint $table) {
                $table->foreignId('kode_bar')->constrained('tabel_barang');
                $table->foreignId('id_ukuran')->constrained('tabel_ukuran');
                $table->foreignId('id_warna')->constrained('tabel_warna');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_barang');
    }
}
