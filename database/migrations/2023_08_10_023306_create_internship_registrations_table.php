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
        Schema::create('internship_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('position_id');
            $table->enum('status', ['SUDAH DAFTAR', 'DIPROSES', 'DITOLAK', 'DITERIMA'])->nullable();
            $table->string('asal_daerah');
            $table->integer('semester');
            $table->string('universitas');
            $table->string('jurusan');
            $table->text('alasan');
            $table->text('kelebihan');
            $table->text('kekurangan');
            $table->text('harapan');
            $table->string('one_description');
            $table->string('bukti_follow');
            $table->string('cv');
            $table->string('portofolio')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('position_id')->references('id')->on('internship_positions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_registrations');
    }
};
