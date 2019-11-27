<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSanBongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblSanBong', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Ten')->nullable();
            $table->integer('ChieuDai')->default(0);
            $table->integer('ChieuRong')->default(0);
            $table->integer('GiaTien')->nullable();
            $table->string('DiaDiem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblSanBong');
    }
}
