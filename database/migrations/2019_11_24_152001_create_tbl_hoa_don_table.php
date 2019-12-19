<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblHoaDon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('PhieuDatSan_ID');
            $table->integer('NhanVien_ID');
            $table->dateTime('NgayThanhToan');
            $table->integer('TongTien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblHoaDon');
    }
}
