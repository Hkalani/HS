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
        Schema::create('exercise_record_charts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('diagnosis')->nullable();
            $table->date('date_of_injury')->nullable();
            $table->string('exercise_name');
            $table->integer('duration_minutes');
            $table->string('intensity_id');
            $table->string('icd9_code_id');
            $table->text('notes')->nullable();
            $table->foreignId('patient_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_record_charts');
    }
};
