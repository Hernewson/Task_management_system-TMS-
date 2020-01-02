<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_no' => $faker->numerify(),
        'address' => $faker->address,
        'city' => $faker->city,
        "company_name" => $faker->sentence(1)
    ];
});
