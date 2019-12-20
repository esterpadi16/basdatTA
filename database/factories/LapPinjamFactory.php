<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\LapPinjam::class, function (Faker $faker) {
    return [
        'id' =>rand(12000,17000),
        'id_ruang' =>rand(1,2),
        'id_mk' =>rand(1,2),
        'tanggal_pinjam' => $faker->date,
        'tanggal_input'=>$faker->date,
        'no_telp'=>$faker->phoneNumber
    ];
});
