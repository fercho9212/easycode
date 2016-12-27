<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i <3 ; $i++) {
          DB::table('tags')->insert(
            array(
              'name'=>$faker->title,
            )
          );
        }
    }
}
