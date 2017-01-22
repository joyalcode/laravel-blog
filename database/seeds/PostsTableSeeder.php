<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('posts')->insert([
	            'user_id' => User::inRandomOrder()->first()->id,
	            'title' => $faker->sentence($nbWords = 6),
	            'post' => $faker->paragraph(25),
                'status' => 1,
                'created_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get()),
                'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get())
	        ]);
        }
        $this->command->info("Posts table seeded)");
    }
}
