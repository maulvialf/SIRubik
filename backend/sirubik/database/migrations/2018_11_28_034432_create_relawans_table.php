<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawans', function (Blueprint $table) {
            $table->increments('id_relawan');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('image');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('waktu_masuk');
            $table->string('no_hp');
            $table->string('id_line');
            $table->string('file_cv');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relawans');
    }
}
