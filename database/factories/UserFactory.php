<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use App\StaffRoles;
use App\Student;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
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

$factory->define(Staff::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->name,
        'password' => Hash::make('021051'),
        'firstname' => $faker->unique()->firstName(),
        'email' => $faker->unique()->email,
        'role_id' => function () {
            if (!StaffRoles::whereTitle('admin')->get()->isEmpty()) {
                return StaffRoles::whereTitle('admin')->first()->id;
            } else {
                factory(StaffRoles::class)->create(['title' => 'admin']);

                return StaffRoles::whereTitle('admin')->first()->id;
            }
        },
        'lastname' => $faker->unique()->lastName
    ];
});

$factory->state(Staff::class, 'teacher', function (Faker $faker) {
    return [
        'username' => $faker->unique()->name,
        'password' => Hash::make('021051'),
        'firstname' => $faker->unique()->firstName(),
        'email' => $faker->unique()->email,
        'role_id' => function () {
            if (!StaffRoles::whereTitle('teacher')->get()->isEmpty()) {
                return StaffRoles::whereTitle('teacher')->first()->id;
            } else {
                factory(StaffRoles::class)->create(['title' => 'teacher']);

                return StaffRoles::whereTitle('teacher')->first()->id;
            }
        },
        'lastname' => $faker->unique()->lastName
    ];
});

$factory->define(Student::class, function (Faker $faker) {
    return [
        'username' => $faker->unique()->name,
        'password' => Hash::make('021051'),
        'firstname' => $faker->unique()->firstName(),
        'email' => $faker->unique()->email,
        'lastname' => $faker->unique()->lastName
    ];
});

$factory->define(StaffRoles::class, function (Faker $faker) {
    return [
        'title' => 'admin'
    ];
});
