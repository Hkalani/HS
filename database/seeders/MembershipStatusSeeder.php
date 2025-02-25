<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MemberStatus;

class MembershipStatusSeeder extends Seeder
{
    public function run()
    {
        $statuses = ['Active', 'Inactive', 'Expired'];

        foreach ($statuses as $status) {
            MemberStatus::firstOrCreate(['name' => $status]);
        }
    }
}
