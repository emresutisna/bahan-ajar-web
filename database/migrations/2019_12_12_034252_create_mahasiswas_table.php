<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nim', 9)->unique();
            $table->string('nama', 150);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->char('jenis_kelamin', 1);
            $table->bigInteger('jurusan_id')->unsigned();
            $table->timestamps();
            $table->foreign('jurusan_id')
              ->references('id')->on('jurusans')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
