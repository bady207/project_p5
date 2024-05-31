<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_industri');
            $table->string('alamat');
            $table->string('tahun_kerja_sama');
            $table->unsignedBigInteger('id_jurusan');
            $table->timestamps();
            $table->foreign('id_jurusan')->references('id')->on('jurusans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industris');
    }
};
