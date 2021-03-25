<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('comments')->insert([
                'news_id' => $faker->numberBetween($min = 1, $max = 15),
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
                'content' => $faker->sentence,
            ]);
        }
    }
}
