<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pesan');
            $table->string('status_pesan', 10);
            $table->timestamps();
        });
            Schema::table('tabel_pemesanan', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained('tabel_user');
                $table->foreignId('sup_id')->constrained('tabel_supplier');
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_pemesanan');
    }
}
