<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
         'tittle' => $faker->sentence(1),
          'body' => $faker->sentence(2),
    ];
});
