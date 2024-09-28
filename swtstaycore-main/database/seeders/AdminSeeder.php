<?php

namespace Database\Seeders;

use App\Enums\UserRoles;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'John',
            'last_name' => 'Ogiriki',
            'email' => 'test12345@gmail.com',
            'phone' => '+2347085668877',
            'password' => Hash::make('test1234'),
            'status' => UserStatus::ACTIVE->value,
            'role' => UserRoles::ADMIN->value
        ]);
    }
}
