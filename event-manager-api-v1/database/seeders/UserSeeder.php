<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(50)
            ->hasRegistrations(1)
            ->create();

        User::factory()
            ->count(100)
            ->hasRegistrations(2)
            ->create();
    }
}
