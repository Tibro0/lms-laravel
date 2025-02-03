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
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'student',
                'created_at' => now(),
            ],
            [
                'name' => 'Instructor',
                'email' => 'instructor@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'instructor',
                'created_at' => now(),
            ],
        ];

        User::insert($users);
    }
}
