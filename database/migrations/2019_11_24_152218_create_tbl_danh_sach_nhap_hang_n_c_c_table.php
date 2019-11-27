<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDanhSachNhapHangNCCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblDanhSachNhapHangNCC', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NCC_ID');
            $table->integer('MatHang_id');
            $table->integer('SoLuong');
            $table->integer('Gia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblDanhSachNhapHangNCC');
    }
}
