<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHoaDonNhapHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblHoaDonNhapHang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NhanVien_ID');
            $table->integer('DanhSachNhapHangNCC_ID');
            $table->dateTime('NgayNhapHang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblHoaDonNhapHang');
    }
}
