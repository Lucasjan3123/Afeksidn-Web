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
        Schema::create('paket_profesional_conselings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->unsignedBigInteger('professional_conseling_id');
            $table->string('harga');
            $table->timestamps();

            $table->foreign('professional_conseling_id')->references('id')->on('professional_conselings')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_profesional_conselings');
    }
};
