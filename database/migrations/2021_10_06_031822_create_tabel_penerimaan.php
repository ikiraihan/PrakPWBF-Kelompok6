<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPenerimaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_penerimaan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_terima');
            $table->integer('total_harga');
            $table->char('status_terima', 1);
            $table->timestamps();
        });    
            Schema::table('tabel_penerimaan', function (Blueprint $table) {
                $table->foreignId('kode_user')->constrained('tabel_user');
                $table->foreignId('kode_sup')->constrained('tabel_supplier');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_penerimaan');
    }
}
