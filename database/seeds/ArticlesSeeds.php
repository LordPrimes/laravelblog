<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticlesSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,1000) as $index) {
	        DB::table('articles')->insert([
	            'title' => $faker->streetName,
	            'description' => $faker->text($maxNbChars = 500),
                'status' => 0,
                'seo_url' => $faker->company,
                'h1' => $faker->jobTitle,
            ]);
            }
    }
}
