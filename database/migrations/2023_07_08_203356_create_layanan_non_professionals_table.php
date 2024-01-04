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
        Schema::create('layanan_non_professionals', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_layanan', ['KONSELING', 'MENTORING']);
            $table->string('nama_layanan');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_non_professionals');
    }
};
