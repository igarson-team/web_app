<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param \Faker\Generator $faker
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {
        for ($i=0;$i<100;$i++) {

            DB::table('foods')->insert([
                'name' => $faker->name(),
                'nameEN' => $faker->name(),
                'explain' => $faker->text(),
                'remain' => $faker->numberBetween(0, 100),
                'like' => $faker->numberBetween(0, 2000),
                'category_id' => $faker->numberBetween(1, 8),
                'deliver_time' => $faker->numberBetween(2, 30),
                'cost' => $this->setdot((string) $faker->numberBetween(1,9 )*pow(10,rand(3,6))),
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now(),
            ]);

        }


    }
    public function setdot($cost){
        $cost = strrev($cost);
        $cost = str_split($cost,3);
        $cost =  implode(',',$cost);
        return strrev($cost);
    }
}
