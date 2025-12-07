<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InitialUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Hamza',
            'email' => 'hamza@gmail.com',
            'password' => Hash::make('hamza123'),
            'role' => 'admin'
        ]);

        // Create customer users
        User::create([
            'name' => 'Muneeba',
            'email' => 'muneeba@gmail.com',
            'password' => Hash::make('muneeba123'),
            'role' => 'customer'
        ]);

        User::create([
            'name' => 'Noor',
            'email' => 'noor@gmail.com',
            'password' => Hash::make('noor1234'),
            'role' => 'customer'
        ]);
    }
}