<?php

namespace Database\Seeders;

use App\Models\mapel;
use App\Models\Nilai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(10)->create();
        mapel::factory(10)->create();
        Nilai::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call([
        //     MapelSeeder::class,
        //     StudentSeeder::class
        // ]);
    }
}
