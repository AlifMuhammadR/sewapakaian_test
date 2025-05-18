<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin mas',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'admin',
        ]);
        User::create([
            'name' => 'owner mba',
            'email' => 'owner@gmail.com',
            'password' => Hash::make('owner'),
            'level' => 'owner',
        ]);
        User::create([
            'name' => 'courier kak',
            'email' => 'courier@gmail.com',
            'password' => Hash::make('courier'),
            'level' => 'kurir',
        ]);
    }
}
