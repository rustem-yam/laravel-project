<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rustem',
            'email' => 'yamaltdinov.rustem2004@yandex.ru',
            'password' => Hash::make(123456),
            'role' => 'moderator'
        ]);
        User::create([
            'name' => 'Rustme',
            'email' => 'reader@yandex.ru',
            'password' => Hash::make(123456),
            'role' => 'reader'
        ]);
    }
}
