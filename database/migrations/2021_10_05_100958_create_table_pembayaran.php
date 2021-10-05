<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pembayaran', function (Blueprint $table) {
            $table->char('id_bayar', 5);
            $table->char('id_terima', 5);
            $table->date('tgl_bayar');
            $table->string('total_bayar');
            $table->primary(['id_bayar', 'id_terima']);
            $table->foreign('id_terima')->references('id_terima')->on('table_penerimaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pembayaran');
    }
}
