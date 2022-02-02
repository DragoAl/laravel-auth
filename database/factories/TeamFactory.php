<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'team_name'=> $faker -> word(), 
        'president'=> $faker -> name(),
        'sport'=> $faker -> randomElement(['basket', 'football']),
        'foundation'=> $faker -> date(),
        'numbers_of_player'=> $faker -> numberBetween(10, 30),
        'location'=> $faker -> word(),
    ];
});
