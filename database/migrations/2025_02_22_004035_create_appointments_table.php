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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->foreignId('member_id');
            $table->unsignedInteger('staff_id');
            $table->enum('appointment_type', ['initial', 'follow_up', 'emergency']);
            $table->dateTime('appointment_date_time');
            $table->enum('status', ['pending', 'completed', 'canceled']);
            $table->integer('duration_minutes')->nullable();
            $table->string('location')->nullable();
            $table->text('notes')->nullable();
            $table->text('appointment_notes')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
