<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user', function (Blueprint $table) {
            $table->char('id_user', 5);
            $table->char('id_kota', 5);
            $table->char('id_role', 5);
            $table->string('nama_user', 40);
            $table->string('alamat_user', 50);
            $table->string('telp_user', 13);
            $table->string('username_user', 20)->unique();
            $table->string('password_user', 20);
            $table->primary(['id_user','id_kota','id_role']);
            $table->foreign('id_kota')->references('id_kota')->on('table_kota');
            $table->foreign('id_role')->references('id_role')->on('table_role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user');
    }
}
