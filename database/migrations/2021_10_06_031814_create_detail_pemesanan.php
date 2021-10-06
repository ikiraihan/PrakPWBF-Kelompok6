<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanan', function (Blueprint $table) {
            $table->integer('jumlah_up');
            $table->integer('harga_up');
            $table->timestamps();
        });
            Schema::table('detail_pemesanan', function (Blueprint $table) {
                $table->foreignId('id_pesan')->constrained('tabel_pemesanan');
                $table->foreignId('kode_bar')->constrained('tabel_barang');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemesanan');
    }
}
