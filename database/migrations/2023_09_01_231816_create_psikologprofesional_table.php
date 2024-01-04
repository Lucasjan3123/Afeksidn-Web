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
        Schema::create('psikologprofesional', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('layanan_profesional_konseling_id');
            $table->unsignedBigInteger('psikolog_id');
            
            $table->foreign('layanan_profesional_konseling_id')->references('id')->on('professional_conselings')->onDelete('restrict');
            $table->foreign('psikolog_id')->references('id')->on('psikologs')->onDelete('restrict');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psikologprofesional');
    }
};
