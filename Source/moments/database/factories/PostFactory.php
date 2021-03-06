<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Faker\Provider\Image;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => $faker->numberBetween(1,30),
        //'image' => $faker->imageUrl($width = 1000, $height = 1000, 'sports')
        'image' => $faker->image($dir = '/uploads', $width = 1000, $height = 1000)
    ];
});
