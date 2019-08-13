<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliKriditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_kridits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kridit_kode');
            
            $table->bigInteger('no_ktp')->unsigned();
            $table->foreign('no_ktp')->references('id')->on('pembelis')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('paket_kode')->unsigned();
            $table->foreign('paket_kode')->references('id')->on('kridit_pakets')->onUpdate('cascade')->onDelete('cascade');
   
            $table->bigInteger('motor_kode')->unsigned();
            $table->foreign('motor_kode')->references('id')->on('motors')->onUpdate('cascade')->onDelete('cascade');
            $table->date('kridit_tanggal');
            $table->boolean('fc_ktp');
            $table->boolean('fc_kk');
            $table->boolean('fc_slip_gaji');
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
        Schema::dropIfExists('beli_kridits');
    }
}
