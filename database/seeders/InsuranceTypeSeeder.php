<?php

namespace Database\Seeders;

// Seeder example for Laravel (or a similar framework)
use Illuminate\Database\Seeder;
use App\Models\InsuranceType;

class InsuranceTypeSeeder extends Seeder
{
    public function run()
    {
        // Seed the InsuranceType table with the predefined values
        InsuranceType::create(['name' => 'Clever care patient']);
        InsuranceType::create(['name' => 'Non-Clevercare patient']);
        InsuranceType::create(['name' => 'Other']);
    }
}
