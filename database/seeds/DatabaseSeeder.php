<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call('CategoryTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('ArticleTableSeeder');
        $this->call('ImageTableSeeder');
        $this->call('TagTableSeeder');
        $this->call('ArticleTagTableSeeder');

    }
}
