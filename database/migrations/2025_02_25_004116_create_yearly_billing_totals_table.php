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
        Schema::create('yearly_billing_totals', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->decimal('amount_due');
            $table->foreignId('patient_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yearly_billing_totals');
    }
};
