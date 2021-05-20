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
                'name'               => 'Sayyad',
                'email'              => 'sayyad5774@gmail.com',
                'password'           => bcrypt('sayyad5774'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-05-11 08:35:06',
                'verification_token' => '',
            ],
            [
                'id'                 => 2,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-05-11 08:35:06',
                'verification_token' => '',
            ],
            [
                'id'                 => 3,
                'name'               => 'Client',
                'email'              => 'client@client.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-05-11 08:35:06',
                'verification_token' => '',
            ],
            [
                'id'                 => 4,
                'name'               => 'Provider',
                'email'              => 'provider@provider.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-05-11 08:35:06',
                'verification_token' => '',
            ],
            [
                'id'                 => 5,
                'name'               => 'Provider2',
                'email'              => 'provider2@provider.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-05-11 08:35:06',
                'verification_token' => '',
            ],
            [
                'id'                 => 6,
                'name'               => 'Provider3',
                'email'              => 'provider3@provider.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-05-11 08:35:06',
                'verification_token' => '',
            ],
            [
                'id'                 => 7,
                'name'               => 'Client',
                'email'              => 'client2@client.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-05-11 08:35:06',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
