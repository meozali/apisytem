<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
    	 //

    	'first_name' => $faker->firstName,
    	'last_name'=> $faker->lastName,
    	'city' => $faker->city,
    	'phone' => $faker->phoneNumber,
    ];
});
