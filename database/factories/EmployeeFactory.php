<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firtname' => $faker -> unique() -> firstName,
      'lastname' => $faker -> unique() -> lastName,
      'birthDay' => $faker -> unique() -> dateTimeThisCentury -> format('Y-m-d'),
      'jobTitle' => $faker -> unique() -> jobTitle,
      'salary' => $faker -> unique() -> randomFloat($nbMaxDecimals = NULL, $min = 1000, $max = 3000)
    ];
});
