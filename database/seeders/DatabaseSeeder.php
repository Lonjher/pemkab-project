<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Student::factory(10)->create();
        // mapel::factory(10)->create();
        // Nilai::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            MapelSeeder::class,
            StudentSeeder::class,
            NilaiSeeder::class,
            UserSeeder::class,
        ]);
    }
}
