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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'gender' =>$faker->randomElement(['male','female']),
        'mobile' =>$faker->phoneNumber,
        'nok' => $faker->name,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Item::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
        'quantity' => $faker->numberBetween(20, 100),
    ];
});

$factory->define(App\State::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->state,
    ];
});

$factory->define(App\Transit::class, function (Faker\Generator $faker) {

    return [
        'transit_code' => str_random(10),
        'arrival_time' => $faker->time('H:i:s', 'now'),
        'departure_time' => $faker->time('H:i:s', 'now'),
        'travel_date' => $faker->dateTime('now', date_default_timezone_get()),
        'status' => $faker->randomElement(['transit','complete','accident']),
        'amount' => $faker->randomFloat(2, 1, 2), 
        'number_of_seats' => $faker->numberBetween(4, 18),
        'available_seats' => $faker->numberBetween(0, 18),
    ];
});

$factory->define(App\Booking::class, function (Faker\Generator $faker) {

    return [
        'unique_code' => str_random(10),
        'number_of_seats' => $faker->numberBetween(4, 18),
        'status' => $faker->randomElement(['paid','unpaid']),
        'total_amount' => $faker->randomFloat(2, 1, 2), 
        'travel_date' => $faker->dateTime('now', date_default_timezone_get()),
    ];
});

$factory->define(App\Inventory::class, function (Faker\Generator $faker) {

    return [
        'quantity' => $faker->numberBetween(1, 80),
        'status' => $faker->randomElement(['in','out']),
        'description' => $faker->paragraph(),
    ];
});