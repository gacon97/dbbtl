<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMatHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblMatHang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Ten')->nullable();
            $table->dateTime('NgaySanXuat')->nullable();
            $table->integer('Gia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblMatHang');
    }
}
