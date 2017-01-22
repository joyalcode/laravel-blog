<?php

use Illuminate\Database\Seeder;
use database\seeds\CategoriesTableSeeder;
use database\seeds\UsersTableSeeder;
use database\seeds\PostsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create();
        factory(App\Category::class,5)->create();

        $categories_array = App\Category::all('id')->pluck('id')->toArray();

        $post = factory(App\Post::class,1000)->create()->each(function($post) use ($categories_array){
             $this->attachRandomCategoriesToPost($post->id, $categories_array);
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
}
