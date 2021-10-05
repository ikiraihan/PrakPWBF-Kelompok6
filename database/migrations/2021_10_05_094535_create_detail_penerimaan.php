<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenerimaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penerimaan', function (Blueprint $table) {
            $table->char('id_terima', 5);
            $table->char('kode_bar', 5);
            $table->integer('harga_his');
            $table->integer('jumlah_his');
            $table->integer('sub_total');
            $table->primary(['id_terima','kode_bar']);
            $table->foreign('id_terima')->references('id_terima')->on('table_penerimaan');
            $table->foreign('kode_bar')->references('kode_bar')->on('table_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penerimaan');
    }
}
