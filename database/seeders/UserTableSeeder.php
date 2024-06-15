<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'name' => 'Developer Team',
                        'email' => 'developer@web.com',
                        'email_verified_at' => NULL,
                        'password' => Hash::make('pass1234'),
                        'phone_number' => '0762942233',
                        'account_no' => '222222',
                        'nic' => '012345678912',
                        'status' => 'Active',
                        'role_name' => 'Admin',
                        'cash' => 10000,
                        'created_at' => '2023-08-28 06:43:11',
                        'updated_at' => '2023-08-28 06:43:11',
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'name' => 'Normal User',
                        'email' => 'user@web.com',
                        'email_verified_at' => NULL,
                        'password' => Hash::make('pass1234'),
                        'nic' => '9876543211',
                        'account_no' => '111111',
                        'phone_number' => '0123456789',
                        'status' => 'Active',
                        'role_name' => 'Normal User',
                        'cash' => 10000,
                        'created_at' => '2023-08-28 07:43:11',
                        'updated_at' => '2023-08-28 07:43:11',
                    ),
            )
        );
    }
}
