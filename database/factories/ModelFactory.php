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
        'username' => $faker->userName,
        'password' => $password ?: $password = bcrypt('password'),
        'uid' => md5(time()),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        
        'event_title' => $faker->sentence,
        'event_description' => $faker->paragraph(5),
        // 'uid' => $faker->numberBetween(1000, 9999),
        'uid' => '1000',
        'event_type' => 'scholarship',
        'event_start_date' => $faker->date('Y-m-d H:i:s'),
        'event_end_date' => $faker->date('Y-m-d H:i:s'),
        'event_time' => '2PM - 5PM Thursday & Friday, 9AM - 1PM on Saturday ',
        'registration_start_date' => $faker->date('Y-m-d H:i:s'),
        'registration_end_date' => $faker->date('Y-m-d H:i:s'),
        'slug' => $faker->slug,
        'live' => $faker->boolean,
        'posted_on' => $faker->date('Y-m-d H:i:s'),
        'niit_center' => 'Abuja'
    ];
});

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        
        'category' => 'Industry Competitiveness Programmes',
        'course_title' => $faker->sentence,
        'course_details' => $faker->paragraph(5),
        'uid' => $faker->numberBetween(1000, 9999),
        'duration' => '3 months',
        'slug' => $faker->slug,
        'photo' => 'noimage.png'
    ];
});

$factory->define(App\Attendee::class, function (Faker\Generator $faker) {
    return [
        
        'name' => $faker->name,
        'gender' => 'Male',
        'email' => $faker->safeEmail,
        'uid' => $faker->numberBetween(1000, 9999),
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'city_of_residence' => $faker->city,
        'attendee_current_status' => 'Non-IT Graduate Employed',
        // 'event_id' => $faker->numberBetween(1000, 9999),
        'event_id' => '1000',
        'posted_on' => $faker->date('Y-m-d H:i:s'),
        'checked_in' => $faker->boolean,
        'check_in_time' => $faker->date('Y-m-d H:i:s'),
    ];
});
