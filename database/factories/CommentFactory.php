<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'comment'=>$faker->sentences(1, true),
        'user_id'=> factory(App\User::class)->create()->id,
        'post_id'=> factory(App\Post::class)->create()->id
    ];
});
