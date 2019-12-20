<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Mahasiswa::class, function (Faker $faker) {
    return [
        'niu' =>rand(12000,17000),
        'nama' => $faker->name,
        'prodi' => $faker->bs,
        'alamat' => $faker->text
    ];
});
