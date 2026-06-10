<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@hanaang.test'],
            [
                'name' => 'Admin Hanaang',
                'password' => Hash::make('password'),
            ],
        );
    }
}
