<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'post'=>$faker->sentences(3, true),

        'user_id'=> factory(App\User::class)->create()->id
    ];
});
