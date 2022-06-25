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
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2022-06-25 09:36:05',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
