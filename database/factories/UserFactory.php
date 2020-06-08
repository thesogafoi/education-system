<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use App\Teacher;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->name,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'firstname' => $faker->unique()->firstName(),
        'email' => $faker->unique()->email,
        'lastname' => $faker->unique()->lastName
    ];
});

$factory->define(Student::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->name,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'firstname' => $faker->unique()->firstName(),
        'email' => $faker->unique()->email,
        'lastname' => $faker->unique()->lastName
    ];
});
