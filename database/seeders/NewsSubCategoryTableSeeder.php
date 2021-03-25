<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('news_sub_categories')->insert([
                'news_id' => $faker->numberBetween($min = 1, $max = 20),
                'sub_category_id' => $faker->numberBetween($min = 1, $max = 15),
            ]);
        }
    }
}
