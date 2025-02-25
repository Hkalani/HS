<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppointmentType;

class AppointmentTypeSeeder extends Seeder
{
    public function run()
    {
        $types = ['pt', 'ac', 'mt'];
        foreach ($types as $type) {
            AppointmentType::create(['name' => strtoupper($type)]);
        }
    }
}
