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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('created_by', 255);
            $table->string('updated_by', 255);
            $table->string('nis', 255);
            $table->string('nama', 255);
            $table->string('gender', 255);
            $table->string('nikah', 255);
            $table->date('tanggal_lahir');
            $table->string('umur', 255);
            $table->string('kewarganegaraan', 255);
            $table->string('bahasa', 255);
            $table->string('domisili', 255);
            $table->string('nomor', 255);
            $table->string('email', 255);
            $table->string('hobi', 255);
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->integer('ukuran_sepatu');
            $table->string('agama', 255);            
            $table->string('kelebihan', 255);
            $table->string('kekurangan', 255);
            $table->string('promosi', 255);
            $table->string('tinggal_jp', 255);
            $table->string('keterangan_tinggal_jp', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
