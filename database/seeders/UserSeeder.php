<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Assem Mohsen',
            'email' => 'asemmohsen911@gmail.com',
            'password' => Hash::make('asemmohsen911@gmail.com'),
        ]);
    }
}
