<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Catalog::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(rand(1, 3), true),
    ];
});
