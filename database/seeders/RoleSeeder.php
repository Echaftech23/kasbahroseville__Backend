<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Admin', 'Guest', 'Front-desk', 'HouseKeeping'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
