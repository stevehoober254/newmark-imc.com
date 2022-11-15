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
                'id'                 => 1,
                'name'               => env('ADMIN_NAME'),
                'email'              => env('ADMIN_EMAIL'),
                'password'           => bcrypt(env('ADMIN_PASSWORD')),
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2022-11-15 10:54:35',
                'two_factor_code'    => '',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
