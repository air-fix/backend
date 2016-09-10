<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$input = [
    'fresh',
    'working',
    'dirty',
    'declined',
];
$factory->define(App\Order::class, function (Faker\Generator $faker) use ($input) {
    return [
        'building'    => $faker->streetName,
        'room'        => $faker->buildingNumber,
        'name'        => $faker->name,
        'contact'     => $faker->phoneNumber,
        'description' => $faker->text,
        'status'      => $input[ array_rand($input) ],
    ];
});
