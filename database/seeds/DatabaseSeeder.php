<?php

use Illuminate\Database\Seeder;
use database\seeds\CategoriesTableSeeder;
use database\seeds\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');        
        // $this->call('CategoriesTableSeeder');
        
        // $this->call(CategoriesTableSeeder);
        		// DB::table('categories')->insert(['categories'=>'new']);

        // DB:table('categories')->insert(['categories'=>'new']);
        // $this->command->info("Categories table seeded)");
    }
}
