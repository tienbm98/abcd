<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 15; $i++) {
            DB::table('sub_categories')->insert([
                'name' => $faker->name,
                'category_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);
        }
    }
}
