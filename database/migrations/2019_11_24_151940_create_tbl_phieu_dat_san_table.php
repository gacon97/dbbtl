<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPhieuDatSanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblPhieuDatSan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('SanBong_ID');
            $table->integer('KhachHang_ID');
            $table->integer('KhungGio_ID');
            $table->integer('NhanVien_ID');
            $table->integer('QuanLy_ID');
            $table->date('NgayBatDau')->nullable();
            $table->date('NgayKetThuc')->nullable();
            $table->date('NgayThanhToan')->nullable();
            $table->integer('TienCoc')->nullable();
            $table->integer('TongTien')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblPhieuDatSan');
    }
}
