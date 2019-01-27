<?php

use Faker\Generator as Faker;
use App\UserModel;
use App\AdminModel;


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

$factory->define(UserModel::class, function (Faker $faker) {
    return [
        'name' => 'User',
        'email' => 'user@email.com',
        'password' => bcrypt('user'), // secret
    ];
});

$factory->define(AdminModel::class, function (Faker $faker) {
    return [
        'name' => 'Admin',
        'email' => 'admin@email.com',
        'password' => bcrypt('admin'), // secret
    ];
});
