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
        Schema::create('ebook', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("penulis");
            $table->year("tahun_terbit");
            $table->unsignedBigInteger('kategori_ebook_id');
            $table->string("deskripsi");
            $table->string("harga");
            $table->string("format-File");
            $table->string('cover_ebook');
            $table->foreign('kategori_ebook_id')->references('id')->on('category_ebook')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ebook');
    }
};
