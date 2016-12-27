<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for ($i=0; $i < 3; $i++) {
          DB::table('article_tag')->insert(
            array(
              'article_id'=>\App\Models\Article::all()->random()->id,
              'tag_id'=>\App\Models\Tag::all()->random()->id
            ));
        }
    }
}
