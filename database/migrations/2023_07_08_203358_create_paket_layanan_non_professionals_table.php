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
        Schema::create('paket_non_professionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layanan_nonProfessionals_id');
            $table->string('nama_paket');
            $table->string('harga');
            $table->timestamps();

            $table->foreign('layanan_nonProfessionals_id')->references('id')->on('layanan_non_professionals')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_layanan_non_professionals');
    }
};
