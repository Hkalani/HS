<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            MembershipTypeSeeder::class,
            MembershipStatusSeeder::class,
            StatusSeeder::class,
            RoleSeeder::class,
            SexSeeder::class,
            InsuranceTypeSeeder::class,
            AppointmentTypeSeeder::class,
            IntensityLevelSeeder::class,
        ]);


        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@ex.com',
            'password' => bcrypt('asdfasdf'),
        ]);
    }
}
