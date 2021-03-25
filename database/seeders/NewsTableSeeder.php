<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i ++) {
            DB::table('news')->insert([
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
                'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'content' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
                'image' => $faker->image('public/images/news',640,480,'NEWS',null,false,),
                'comment' => $faker->sentence,
            ]);
        }
    }
}
