<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNguoiDungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblNguoiDung', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('TaiKhoan_ID');
            $table->integer('Nguoi_ID');
            $table->string('ChucVu')->nullable();
            $table->integer('Luong')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblNguoiDung');
    }
}
