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
        Schema::create('event_material_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('title_sesi');
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('pembicara_id');
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('pembicara_id')->references('id')->on('psikologs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_material_sessions');
    }
};
