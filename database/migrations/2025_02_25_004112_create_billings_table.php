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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreignId('service_id');
            $table->string('icd9_code_id');
            $table->decimal('price');
            $table->boolean('medicare_flag')->default();
            $table->boolean('hmo_flag')->default();
            $table->decimal('amount_due');
            $table->boolean('insurance_covered')->default();
            $table->string('status_id');
            $table->foreignId('i_c_d9_code_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
