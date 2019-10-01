<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Place;

$factory->define(Place::class, function (Faker $faker) {
    return [
        'name' => $faker -> unique() -> company,
        'address' => $faker -> unique() -> streetAddress,
        'city' => $faker -> unique() -> city,
        'nation' => $faker -> unique() -> country
    ];
});
