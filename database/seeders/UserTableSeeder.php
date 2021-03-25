<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i <8; $i ++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'is_admin' => '0',
                'password' => $faker->password,
            ]);
        }
    }
}
