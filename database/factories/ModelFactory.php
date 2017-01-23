<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'category'=> ucfirst($faker->word(5))
    ];
});


$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
	        'user_id' => App\User::inRandomOrder()->first()->id,
	        'title' => $faker->sentence($nbWords = 6),
	        'post' => $faker->paragraph(25),
            'status' => 1,
            'created_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get()),
            'updated_at' => $faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = date_default_timezone_get())
    ];
});
