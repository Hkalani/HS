<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IntensityLevel;

class IntensityLevelSeeder extends Seeder
{
    public function run()
    {
        $levels = ['low', 'medium', 'high'];
        foreach ($levels as $level) {
            IntensityLevel::create(['name' => ucfirst($level)]);
        }
    }
}
