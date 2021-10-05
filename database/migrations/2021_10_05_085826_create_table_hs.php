<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_hs', function (Blueprint $table) {
            $table->char('id_hs', 5);
            $table->date('tgl_hs');
            $table->integer('update_stok_hs');
            $table->boolean('status');
            $table->primary('id_hs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_hs');
    }
}
