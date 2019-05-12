<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TreeNode;
use Faker\Generator as Faker;

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

$factory->define(TreeNode::class, function (Faker $faker) {
    return [
        'credits_left' => rand(-2147483648, 2147483647),
        'credits_right' => rand(-2147483648, 2147483647),
        'username' => rand(-2147483648, 2147483647),
    ];
});
