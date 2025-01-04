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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar');
            $table->text('description_ar');
            $table->string('name_en')->nullable();
            $table->text('description_en')->nullable();
            $table->string('status')->default('0');// حالة  0 يعني عدم ظهوره في الموقع  -- 1 يظهر
            $table->string('image')->nullable();
            $table->date('date');
            $table->enum('type', ['activity', 'workshop'])->default('activity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
