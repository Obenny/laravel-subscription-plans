<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert default plan
        DB::table('plans')->insert([
            [
                'name' => 'Stellar Trial',
                'type' => 'trial',
                'price' => '0',
                'duration' => '7',
                'description' => 'Host up to 3 websites with the CMS of your choice. Includes a free Website Builder and email solution.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

        DB::table('plans')->insert([
            [
                'name' => 'Stellar',
                'type' => 'normal',
                'price' => '8',
                'duration' => '30',
                'description' => 'Host up to 3 websites with the CMS of your choice. Includes a free Website Builder and email solution.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);

        DB::table('plans')->insert([
            [
                'name' => 'Business Stellar Trial',
                'type' => 'trail',
                'price' => '0',
                'duration' => '7',
                'description' => 'Host up to 3 websites with the CMS of your choice. Includes a free Website Builder and email solution.',
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);
    }
}
