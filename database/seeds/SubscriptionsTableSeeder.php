<?php

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default subscription
        DB::table('subscriptions')->insert([
            [
                'user_id' => 2,
                'plan_id' => 1,
//                'type' => 'trial',
//                'duration' => '7',
                'expiry_date' => '2020-12-14 11:55:42',
                'status' => 'active',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

        DB::table('subscriptions')->insert([
            [
                'user_id' => 3,
                'plan_id' => 2,
//                'type' => 'trial',
//                'duration' => '7',
                'expiry_date' => '2020-12-14 11:55:42',
                'status' => 'active',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

        DB::table('subscriptions')->insert([
            [
                'user_id' => 4,
                'plan_id' => 3,
//                'type' => 'trial',
//                'duration' => '7',
                'expiry_date' => '2020-12-14 11:55:42',
                'status' => 'active',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

    }
}
