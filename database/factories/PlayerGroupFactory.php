<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PlayerGroup;
use Faker\Generator as Faker;

$factory->define(PlayerGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
