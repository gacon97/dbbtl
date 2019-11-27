<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNhaCungCapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblNhaCungCap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Ma')->nullable();
            $table->string('Ten')->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('Email')->nullable();
            $table->string('SDT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblNhaCungCap');
    }
}
