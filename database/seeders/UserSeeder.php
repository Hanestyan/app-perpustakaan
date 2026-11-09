<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
       \App\Models\User::updateOrCreate(
            ['email' => 'admin@pens.ac.id'],
            ['name' => 'Bambang Sutrisno', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'role' => 'admin']
        );

        \App\Models\User::updateOrCreate(
            ['email' => 'petugas1@pens.ac.id'],
            ['name' => 'Siti Rahmawati', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'role' => 'petugas']
        );

        \App\Models\User::updateOrCreate(
            ['email' => 'petugas2@pens.ac.id'],
            ['name' => 'Ahmad Fauzi', 'password' => \Illuminate\Support\Facades\Hash::make('password'), 'role' => 'petugas']
        );
    }
}