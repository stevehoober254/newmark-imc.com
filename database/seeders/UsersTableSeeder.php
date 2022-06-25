<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'wilson@newmark-imc.com',
                'password'       => bcrypt('2$5#$5@=3'),
                'remember_token' => null,
                'approved'       => 1,
            ],
        ];

        User::insert($users);
    }
}
