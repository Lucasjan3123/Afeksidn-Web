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
        Schema::create('konselors', function (Blueprint $table) {
            $table->id('id_konselor');
            $table->unsignedBigInteger('user_id');
            $table->string('nohp')->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('instansi')->nullable();
            $table->string('divisi')->nullable();
            $table->text('alasan')->nullable();
            $table->string('bukti_follow')->nullable();
            $table->string('cv')->nullable();
            $table->string('portofolio')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselors');
    }
};