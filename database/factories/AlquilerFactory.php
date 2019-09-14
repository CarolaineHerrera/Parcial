<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alquiler;
use Faker\Generator as Faker;

$factory->define(Alquiler::class, function (Faker $faker) {
    return [
        'precio' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'fecha' => $faker->date,
        
        'pelicula_id' => function(){
        	return factory(App\Models\Pelicula::class)->create()->id;
        },
         "todo" => [
         "fecha_entrega" => $faker->date,
         "lugar_entrega" => $faker->city,
         "hora_entrega" => $faker->time,
        ],
    ];
});
