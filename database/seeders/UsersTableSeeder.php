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
                'name'               => 'Admin',
                'email'              => 'steveowago@gmail.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2021-12-17 13:21:44',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
