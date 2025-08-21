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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan', 255);
            $table->integer('tahun_masukaperusahaan');
            $table->string('bulan_masukaperusahaan', 255);
            $table->string('status', 255);
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
        Schema::dropIfExists('experiences');
    }
};
