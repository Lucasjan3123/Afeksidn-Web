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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_event_id');
            $table->enum('activity_category_event', ['WEBINAR', 'CAMPAIGN']);
            $table->string('title_event');
            $table->string('slug_event');
            $table->enum('time_category_event', ['ONLINE', 'OFFLINE']);
            $table->enum('pay_category_event', ['FREE', 'PAID']);
            $table->date('registration_start');
            $table->date('registration_end');
            $table->date('date_event');
            $table->time('time_start');
            $table->time('time_finish');
            $table->string('cover_event');
            $table->string('price_event')->nullable();
            $table->string('is_place')->nullable();
            $table->text('description_event');
            $table->enum('status_event', ['LIVE','DRAFT','EXPIRE']);
            $table->timestamps();

            $table->foreign('category_event_id')->references('id')->on('event_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
