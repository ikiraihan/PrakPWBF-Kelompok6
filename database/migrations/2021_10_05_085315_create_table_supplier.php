<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_supplier', function (Blueprint $table) {
            $table->char('id_sup', 5);
            $table->string('nama_sup', 40);
            $table->string('alamat_sup', 50);
            $table->string('telp_sup', 13);
            $table->primary('id_sup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_supplier');
    }
}
