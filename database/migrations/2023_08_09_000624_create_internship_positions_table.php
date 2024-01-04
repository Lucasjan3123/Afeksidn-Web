<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('internship_positions', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posisi');
            $table->enum('tipe_kerja', ['Internship', 'Fulltime']);
            $table->string('slug');
            $table->string('tempat');
            $table->text('jobdesc');
            $table->text('kualifikasi');
            $table->enum('status', ['DIPROSES', 'AKTIF', 'DITERIMA']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_positions');
    }
};
