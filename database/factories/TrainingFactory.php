<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Training;
use Faker\Generator as Faker;

$factory->define(Training::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
