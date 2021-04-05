<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id_siswa');
            $table->string('nama_lengkap');
            $table->string('NIK')->nullable();
            $table->unsignedBigInteger('kelas_id')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('alamat');
            $table->integer('kode_pos');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->integer('tahun_masuk');
            $table->integer('tahun_lulus')->nullable();
            $table->string('status');
            $table->string('no_ponsel');
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('no_ponsel_orang_tua')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('no_ponsel_wali')->nullable();
            $table->string('foto_profil')->nullable();
            $table->timestamps();

            $table->foreign('kelas_id')
                ->references('id_kelas')
                ->on('kelas')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
