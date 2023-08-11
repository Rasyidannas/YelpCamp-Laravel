<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rasyid Annas',
            'email' => 'rasyid@gmail.com',
            'password' => '$2y$10$IliFtpC/Y4pyaYt5lPZOLunfOHhhsCftdBxiU2vPWEbHfQIIg/RZu'
        ],
        [
            'name' => 'Ciko',
            'email' => 'ciko@gmail.com',
            'password' => '$2y$10$IliFtpC/Y4pyaYt5lPZOLunfOHhhsCftdBxiU2vPWEbHfQIIg/RZu'
        ]);
    }
}
