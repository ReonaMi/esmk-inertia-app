<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengelolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengelola', function (Blueprint $table) {
            $table->bigIncrements('id_pengelola');
            $table->string('nama_lengkap');
            $table->string('gelar')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('deskripsi')->nullable();
            $table->unsignedBigInteger('jurusan_id')->nullable();
            $table->string('foto_profil')->nullable();
            $table->timestamps();

            $table->foreign('jurusan_id')
                ->references('id_jurusan')
                ->on('jurusan')
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
        Schema::dropIfExists('pengelola');
    }
}
