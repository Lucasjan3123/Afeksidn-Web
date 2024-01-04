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
        Schema::create('psikologs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('layanan_non_professionals_id')->nullable();
            // $table->unsignedBigInteger('professional_conseling_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('nama_psikolog');
            $table->double('rating')->nullable();
            $table->string('profil');
            $table->text('deskripsi')->nullable();
            $table->string('keahlian')->nullable();
            $table->timestamps();

            // $table->foreign('layanan_non_professionals_id')->references('id')->on('layanan_non_professionals')->onDelete('cascade');
            // $table->foreign('professional_conseling_id')->references('id')->on('professional_conselings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psikologs');
    }
};
