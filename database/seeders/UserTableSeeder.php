<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Alexandre',
                'last_name' => 'Collot',
                'username' => 'systemadmin',
                'email' => 'alexandre.collot@europe-convoyage.com',
                'password' => bcrypt('0UrA8HvH4X'),
                'phone_number' => '+33 6 17 09 41 01',
                'email_verified_at' => now(),
                'user_type' => 'admin',
                'status' => 'active',
            ],
            // [
            //     'first_name' => 'Demo',
            //     'last_name' => 'Admin',
            //     'username' => 'demoadmin',
            //     'email' => 'demo@example.com',
            //     'password' => bcrypt('password'),
            //     'phone_number' => '+12398190255',
            //     'email_verified_at' => now(),
            //     'user_type' => 'demo_admin',
            // ],
            // [
            //     'first_name' => 'John',
            //     'last_name' => 'User',
            //     'username' => 'user',
            //     'email' => 'user@example.com',
            //     'password' => bcrypt('password'),
            //     'phone_number' => '+12398190255',
            //     'email_verified_at' => now(),
            //     'user_type' => 'user',
            //     'status' => 'inactive'
            // ]
        ];
        foreach ($users as $key => $value) {
            $user = User::create($value);
            $user->assignRole($value['user_type']);
        }
    }
}
