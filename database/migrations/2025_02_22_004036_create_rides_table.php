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
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id');
            $table->foreignId('member_id');
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->dateTime('pickup_time');
            $table->boolean('return_ride')->default();
            $table->dateTime('return_pickup_time')->nullable();
            $table->string('driver_id');
            $table->enum('status', ['pending', 'in_progress', 'completed', 'cancelled']);
            $table->text('ride_notes')->nullable();
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rides');
    }
};
