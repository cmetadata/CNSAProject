<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|Player
*/

$factory->define(App\User::class, function (Faker $faker) {
    	return [
		'firstName' 	=> $faker->first_name,
		'lastName' 		=> $faker->last_name,
		'schoolId' 		=> $faker->number,
		'yearEntered' 	=> $faker->date,
		'position' 		=> str_random(10),
		'teamId' 		=> $faker->number,
		'redCards' 		=> $faker->number,
		'yellowCards' 	=> $faker->number,
		'goals' 		=> $faker->number,
		'playerRating' 	=> $faker->number,
		'assists'		=> $faker->number,
		'saves' 		=> $faker->number,
});

$factory->define(App\Player::class, function (Faker\Generator $faker) {	
	//Creating random data for the database Player table
	return [
		'firstName' 	=> $faker->first_name,
		'lastName' 		=> $faker->last_name,
		'schoolId' 		=> $faker->number,
		'yearEntered' 	=> $faker->date,
		'position' 		=> str_random(10),
		'teamId' 		=> $faker->number,
		'redCards' 		=> $faker->number,
		'yellowCards' 	=> $faker->number,
		'goals' 		=> $faker->number,
		'playerRating' 	=> $faker->number,
		'assists'		=> $faker->number,
		'saves' 		=> $faker->number
	];
});
