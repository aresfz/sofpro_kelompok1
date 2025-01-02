<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Guru RPL',
            'email' => 'gururpl@gmail.com',
            'password' => Hash::make ('guru123'),
        ]);

        User::create([
            'name' => 'Super Admin',
            'Email' => 'admin@rpl.com',
            'password' => Hash::make('admin123'), // Gantilah dengan password yang aman
            'role' => 'admin',  // Role admin
        ]);
    }
}
