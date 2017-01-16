<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker= Faker::create();
      for ($i=0; $i <3 ; $i++) {
        DB::table('users')->insert(
          array(
            'name'=>$faker->name,
            'email'=>$faker->email,
            'password'=>Hash::make('123456'),
            'type'=>$faker->randomElement(['member','admin']),
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
          )
        );
      }
    }
}
