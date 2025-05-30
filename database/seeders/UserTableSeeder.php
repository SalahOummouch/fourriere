<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
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
        $company = Company::create([
            'name' => 'administration',
            'address' => ' ',
            'phone' => ' ',
            'status' => 'active',
        ]);
        $users = [
            [
                'first_name' => 'Alexandre',
                'last_name' => 'Collot',
                'username' => 'Alexandre Collot',
                'email' => 'alexandre.collot@europe-convoyage.com',
                'password' => bcrypt('0UrA8HvH4X'),
                'phone_number' => '+33617094101',
                'company_id' => $company -> id,
                'email_verified_at' => now(),
                'user_type' => 'admin',
                'status' => 'active',
            ],
            // [
            //     'first_name' => 'Salah',
            //     'last_name' => 'Oummouch',
            //     'username' => 'user',
            //     'email' => 'oummouch.salah@gmail.com',
            //     'password' => bcrypt('password'),
            //     'phone_number' => '+12398190255',
            //     'email_verified_at' => now(),
            //     'user_type' => 'user',
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
