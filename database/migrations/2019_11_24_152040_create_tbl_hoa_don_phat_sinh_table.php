<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHoaDonPhatSinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblHoaDonPhatSinh', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('SoLuong')->nullable();
            $table->integer('DonGia')->nullable();
            $table->integer('PhieuCheckout_ID');
            $table->integer('MatHang_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblHoaDonPhatSinh');
    }
}
