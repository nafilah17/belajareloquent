<?php

//hilangkan use faker

$factory->define(App\Dogs::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
    ];
});
