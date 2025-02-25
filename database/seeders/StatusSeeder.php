<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    public function run()
    {
        $statuses = [
            ['name' => 'Pending', 'category' => 'booking'],
            ['name' => 'Confirmed', 'category' => 'booking'],
            ['name' => 'Cancelled', 'category' => 'booking'],
            ['name' => 'Completed', 'category' => 'appointment'],
            ['name' => 'No Show', 'category' => 'appointment'],
            ['name' => 'Scheduled', 'category' => 'ride'],
            ['name' => 'In Transit', 'category' => 'ride'],
            ['name' => 'Dropped Off', 'category' => 'ride'],
        ];

        foreach ($statuses as $status) {
            Status::firstOrCreate($status);
        }
    }
}
