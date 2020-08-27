<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use App\Models\Topic;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
	$users = User::all();
	$usersId = [];

	$topics = Topic::all();
	$topicsId = [];

	foreach ($topics as $topic) {
		$topicsId[] = $topic->id;
	}

	foreach ($users as $user) {
		$usersId[] = $user->id;
	}

	return [
		'post' => $faker->text(200),
		'topic_id' => $faker->randomElement($topicsId),
		'user_id' => $faker->randomElement($usersId),
	];
});
