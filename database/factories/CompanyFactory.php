<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Company;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker -> unique() -> company,
        'phone' => $faker -> unique() -> tollFreePhoneNumber,
        'mail' => $faker -> unique() -> companyEmail,
        'website' => $faker -> unique() -> domainName
    ];
});
