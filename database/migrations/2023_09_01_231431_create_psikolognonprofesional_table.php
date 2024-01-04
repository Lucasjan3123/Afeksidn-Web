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
        Schema::create('psikolognonprofesional', function (Blueprint $table) {
            //$table->id();
            $table->unsignedBigInteger('layanan_nonProfesional_id');
            $table->foreign('layanan_nonProfesional_id')->references('id')->on('layanan_non_professionals')->onDelete('restrict');
            $table->unsignedBigInteger('psikolog_id');
            $table->foreign('psikolog_id')->references('id')->on('psikologs')->onDelete('restrict');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psikolognonprofesional');
    }
};
