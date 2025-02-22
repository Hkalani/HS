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
        Schema::create('exercise_records', function (Blueprint $table) {
            $table->id();
            $table->string('exercise_name');
            $table->integer('duration_minutes');
            $table->enum('intensity', ['low', 'medium', 'high']);
            $table->foreignId('treatment_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_records');
    }
};
