<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert first user with email a@gmail.com and password "12345678"
        DB::table('users')->insert([
            [
                'name' => 'Default Admin',
                'email' => 'a@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'status' => 'active',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'User Test 2',
                'email' => 'u2@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'status' => 'active',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'User Test 3',
                'email' => 'u3@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'status' => 'active',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'User Test 4',
                'email' => 'u4@gmail.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'status' => 'active',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);
    }
}
