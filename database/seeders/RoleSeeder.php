<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Define the roles with the optional type field for staff roles
        $roles = [
            ['name' => 'admin', 'type' => null],
            ['name' => 'staff', 'type' => null],
            ['name' => 'patient', 'type' => null],
            ['name' => 'driver', 'type' => 'staff'],  // staff of type 'driver'
            ['name' => 'pt', 'type' => 'staff'],  // staff of type 'pt'
        ];

        // Iterate over roles and create them
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}

