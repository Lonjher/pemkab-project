<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Admin",
                "email" => "admin@admin.com",
                "password" => bcrypt("password"),
                "jabatan" => "admin",
            ],
            [
                "name" => "Kepala",
                "email" => "kepala@kepala.com",
                "password" => bcrypt("password"),
                "jabatan" => "kepala",
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
