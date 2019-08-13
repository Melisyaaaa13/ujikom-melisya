<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarCicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_cicilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cicilan_kode');
        
            $table->bigInteger('kridit_kode')->unsigned();
            $table->foreign('kridit_kode')->references('id')->on('beli_kridits')->onUpdate('cascade')->onDelete('cascade');
            $table->date('cicilan_tanggal');
            $table->integer('cicilan_jumlah');
            $table->integer('cicilan_ke');
            $table->integer('cicilan_sisa_ke');
            $table->double('cicilan_sisa_harga');
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
        Schema::dropIfExists('bayar_cicilans');
    }
}
