<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Disease;
use Faker\Generator as Faker;

$factory->define(Disease::class, function (Faker $faker) {
    return [
        //
        "name" => ucwords($faker->word),
        'photo' => 'backend/diseaseimg/' . $faker->image('public/backend/diseaseimg',400,300, null, false),
        'about' =>  $faker->paragraph,
    ];
});
