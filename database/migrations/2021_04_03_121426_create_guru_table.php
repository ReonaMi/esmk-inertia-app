<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigIncrements('id_guru');
            $table->string('nama_lengkap');
            $table->string('gelar')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_ponsel');
            $table->string('NIK');
            $table->text('alamat');
            $table->integer('kode_pos');
            $table->string('foto_profil')->nullable();
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
        Schema::dropIfExists('guru');
    }
}
