<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImageTableSeeder extends Seeder
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
          DB::table('images')->insert(
            array(
              'name'=>$faker->name,
              'article_id'=>\App\Models\Article::all()->random()->id
            )
          );
        }
    }
}
