<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->updateOrCreate(
            [
                'email' => 'admin123@gmail.com',
            ],
            [
                'password' => bcrypt('aaaassss'),
                'name' => 'admin',
                'type' => true,
            ]);
    }
}
