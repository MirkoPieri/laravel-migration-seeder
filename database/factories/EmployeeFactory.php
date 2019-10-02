<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'firtname' => $faker -> firstName,
      'lastname' => $faker -> lastName,
      'birthDay' => $faker -> dateTimeThisCentury -> format('Y-m-d'),
      'jobTitle' => $faker -> jobTitle,
      'salary' => $faker -> randomFloat($nbMaxDecimals = NULL, $min = 1000, $max = 3000)
    ];
});
