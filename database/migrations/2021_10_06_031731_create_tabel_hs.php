<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelHs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_hs', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_hs');
            $table->integer('update_stok_hs');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('tabel_hs', function (Blueprint $table) {
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
        Schema::dropIfExists('tabel_hs');
    }
}
