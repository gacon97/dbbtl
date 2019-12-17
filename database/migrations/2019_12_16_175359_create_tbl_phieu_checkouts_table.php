<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPhieuCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblPhieuCheckout', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('gioNhanSan')->nullable();
            $table->dateTime('gioTraSan')->nullable();
            $table->integer('PhieuDatSan_ID');
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
        Schema::dropIfExists('tblPhieuCheckout');
    }
}
