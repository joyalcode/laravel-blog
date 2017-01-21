<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,6) as $index)
        {        
            DB::table('categories')->insert(['category'=>$faker->word()]);
        }    
        $this->command->info("Categories table seeded)");     
    }
}
