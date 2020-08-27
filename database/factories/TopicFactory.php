<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Topic;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Topic::class, function (Faker $faker) {
	$users = User::all();
	$usersId = [];

	foreach ($users as $user) {
		$usersId[] = $user->id;
	}

	$fakeName = $faker->text('80');

	return [
		'name' => $fakeName,
		'slug' => Str::of($fakeName)->slug(),
		'user_id' => $faker->randomElement($usersId),
	];
});
