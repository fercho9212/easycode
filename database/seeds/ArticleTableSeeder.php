<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker=Faker::create();
        //$user=User::orderByRaw("RAND()")->take(3)->get();
        //$category=Category::orderByRaw("RAND()")->take(3)->get();

        for ($i=0; $i <3 ; $i++) {
          DB::table('articles')->insert(
            array(
              'title'=>$faker->title,
              'content'=>$faker->name,
              'user_id'=>\App\Models\User::all()->random()->id,
              'category_id'=>\App\Models\Category::all()->random()->id,

            )
          );
        }
    }
}
