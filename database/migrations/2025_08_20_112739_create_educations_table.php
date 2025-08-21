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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah', 255);
            $table->integer('tahun_masuksekolah');
            $table->string('bulan__masuksekolah', 255);
            $table->string('status_sekolah', 255);
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
};
