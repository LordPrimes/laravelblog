<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class UserSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,2) as $index) {
	        DB::table('users')->insert([
	            'name' => 'admin',
	            'email' => $faker->text($maxNbChars = 250),
                'password' => 123456
            ]);
            }
	}
    
}
