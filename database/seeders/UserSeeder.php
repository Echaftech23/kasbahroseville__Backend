<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '123456789',
                'password' => Hash::make('password123'),
                'statut' => 'Active',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'phone' => '987654321',
                'password' => Hash::make('password456'),
                'statut' => 'Active',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'phone' => '555666777',
                'password' => Hash::make('password789'),
                'statut' => 'Active',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
                'phone' => '444333222',
                'password' => Hash::make('passwordabc'),
                'statut' => 'Active',
            ],
            [
                'name' => 'Boba Smith',
                'email' => 'boba@example.com',
                'phone' => '444133222',
                'password' => Hash::make('passwordabc'),
                'statut' => 'Active',
            ],
            [
                'name' => 'Eva Anderson',
                'email' => 'eva@example.com',
                'phone' => '111222333',
                'password' => Hash::make('passwordeva'),
                'statut' => 'Active',
            ],
            [
                'name' => 'Michael Williams',
                'email' => 'michael@example.com',
                'phone' => '999888777',
                'password' => Hash::make('passwordmike'),
                'statut' => 'Active',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
