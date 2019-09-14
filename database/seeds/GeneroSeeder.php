<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = factory(App\Models\Genero::class)
        ->create()
        ->each(function ($genero) {
           $pelicula = factory(App\Models\Pelicula::class)->make();
           $genero->peliculas()->save($pelicula);
           $pelicula->alquileres()->save(factory(App\Models\Alquiler::class)->make());        
        });
    }
}
