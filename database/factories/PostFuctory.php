<?php

use Faker\Generator as Faker;

$factory->define(App\Eloquent\Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 20),
        'category_id' => rand(1, 7),
        'title' => $faker->title,
        'content' => $faker->text(100),
    ];
});
