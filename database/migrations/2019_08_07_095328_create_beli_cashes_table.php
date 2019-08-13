<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cash_kode');
            
            $table->bigInteger('no_ktp')->unsigned();
            $table->foreign('no_ktp')->references('id')->on('pembelis')->onUpdate('cascade')->onDelete('cascade');
           
            $table->bigInteger('motor_kode')->unsigned();
            $table->foreign('motor_kode')->references('id')->on('motors')->onUpdate('cascade')->onDelete('cascade');
            
            $table->date('tanggal');
            $table->float('bayar');
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
        Schema::dropIfExists('beli_cashes');
    }
}
