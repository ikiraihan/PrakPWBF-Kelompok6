<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenerimaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_penerimaan', function (Blueprint $table) {
            $table->char('id_terima', 5);
            $table->char('id_user', 5);
            $table->char('id_sup', 5);
            $table->date('tgl_terima');
            $table->integer('total_harga');
            $table->char('status_terima', 1);
            $table->primary(['id_terima', 'id_user', 'id_sup']);
            $table->foreign('id_user')->references('id_user')->on('table_user');
            $table->foreign('id_sup')->references('id_sup')->on('table_supplier');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_penerimaan');
    }
}
