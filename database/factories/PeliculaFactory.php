<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Pelicula;
use Faker\Generator as Faker;

$factory->define(App\Models\Pelicula::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,        
        'genero_id' => function(){
        	return factory(App\Models\Genero::class)->create()->id;
        }
    ];
});
