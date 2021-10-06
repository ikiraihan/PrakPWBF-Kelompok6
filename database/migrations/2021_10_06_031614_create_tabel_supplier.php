<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sup', 40);
            $table->string('alamat_sup', 50);
            $table->string('telp_sup', 13);
            $table->timestamps();
        });

        Schema::table('tabel_user', function (Blueprint $table) {
            $table->foreignId('kode_kota')->constrained('tabel_kota');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_supplier');
    }
}
