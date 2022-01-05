<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiPenggajianDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penggajian_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_transaksi');
            $table->string('keterangan')->nullable();
            $table->decimal('debit');
            $table->decimal('kredit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_penggajian_detail');
    }
}
