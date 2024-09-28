<?php

namespace Database\Seeders;

use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'God\'swill',
            'last_name' => 'Azubike',
            'email' => 'test1234@gmail.com',
            'phone' => '+2347085668887',
            'password' => Hash::make('test1234'),
            'status' => UserStatus::PENDING->value
        ]);
    }
}
