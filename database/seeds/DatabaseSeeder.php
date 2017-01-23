<?php

use Illuminate\Database\Seeder;
use database\seeds\CategoriesTableSeeder;
use database\seeds\UsersTableSeeder;
use database\seeds\PostsTableSeeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,5)->create();
        factory(App\Category::class,5)->create();

        $categories_array = App\Category::all('id')->pluck('id')->toArray();

        $post = factory(App\Post::class,20)->create()->each(function($post) use ($categories_array){
             $this->attachRandomCategoriesToPost($post->id, $categories_array);
             $this->addCommentsToPost($post->id);
        });
    }

    private function attachRandomCategoriesToPost($post_id, $categories)
    {

        shuffle($categories);
        $categories_count = count($categories);
        $post_categories_count = random_int(1, $categories_count);
        for ($i=0; $i < $post_categories_count; $i++) 
        {
            DB::table('category_post')->insert([
                'category_id' => $categories[$i],
                'post_id' => $post_id,
            ]);
        }
    }

    private function addCommentsToPost($post_id)
    {
        $faker = Faker::create();
        DB::table('comments')->insert([
            'post_id' => $post_id,
            'user_id' => App\User::inRandomOrder()->first()->id,
            'comment' =>  $faker->sentence($nbWords = 20),
            'created_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get()),
            'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get())
        ]);        
    }    
}
