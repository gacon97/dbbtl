<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNguoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblNguoi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('HoTen')->nullable();
            $table->string('DiaChi')->nullable();
            $table->string('Email')->nullable();
            $table->string('SoDienThoai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblNguoi');
    }
}
