<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()
            ->hasPets(fake()->numberBetween(1, 3))
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
    }
}
