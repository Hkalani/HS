<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MembershipType;

class MembershipTypeSeeder extends Seeder
{
    public function run()
    {
        $types = ['Kalani Daypass', 'Health springs Plus', 'Health Springs Basic'];
        foreach ($types as $type) {
            MembershipType::create(['name' => $type]);
        }
    }
}

