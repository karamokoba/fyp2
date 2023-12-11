<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Remove existing records to start with a clean slate
        DB::table('users')->truncate();

        // Insert sample data
        DB::table('users')->insert([
            'name' => 'John Doe',
            'matric_number' => 123456,
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
            'categories' => 'Lecturer',
        ]);

        DB::table('users')->insert([
            'name' => 'Diaby',
            'matric_number' => 1725493,
            'password' => Hash::make('1234'),
            'created_at' => now(),
            'updated_at' => now(),
            'categories' => 'Student',
        ]);

        DB::table('users')->insert([
            'name' => 'Fanta',
            'matric_number' => 20172549,
            'password' => Hash::make('Fanta0'),
            'created_at' => now(),
            'updated_at' => now(),
            'categories' => 'Student',
        ]);

        DB::table('users')->insert([
            'name' => 'Mr diaby',
            'matric_number' => 202320,
            'password' => Hash::make('diaby06'),
            'created_at' => now(),
            'updated_at' => now(),
            'categories' => 'Lecturer',
        ]);
        
    }
}
