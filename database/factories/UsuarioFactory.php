<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->lastName,
        'apellido' => $faker->firstName,
        'telefono' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->email,
        'direccion' =>$faker->address
    ];
});
