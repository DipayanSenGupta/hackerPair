<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
		'name' => 'Laravel and Coffee',
		'published' => 1,
		 'start' => '2017-12-01 15:00:00',
		 'max_attendees' => 3,
		 'venue' => 'City Coffee Shop',
		 'city' => 'Dublin',
		 'description' => "Let's drink coffee and learn Laravel together!"
    ];
});
