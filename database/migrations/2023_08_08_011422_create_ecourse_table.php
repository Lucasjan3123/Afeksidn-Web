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
        Schema::create('ecourse', function (Blueprint $table) {
            $table->id();
            $table->string("nama_course");
            $table->string("instruktur");
            $table->string("deskripsi");
            $table->string("durasi");
            $table->string("level");
            $table->string("harga");
            $table->string("link_akses");
            $table->string('cover_ecourse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecourse');
    }
};
