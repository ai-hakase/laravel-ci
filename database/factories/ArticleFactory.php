<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        // 
        'title' => $faker->text(50),
        'body' => $faker->text(500),
        'user_id' => function() {
            return factory(User::class);
        }
    ];
});
