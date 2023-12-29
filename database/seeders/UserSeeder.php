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
        $users = [
            [
                'email' => 'user1@gmail.com',
                'name' => 'user1',
                'username' => 'user1',
                'password' => bcrypt('password'),
            ],
            [
                'email' => 'user2@gmail.com',
                'name' => 'user2',
                'username' => 'user2',
                'password' => bcrypt('password'),
            ],
            [
                'email' => 'user3@gmail.com',
                'name' => 'user3',
                'username' => 'user3',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
