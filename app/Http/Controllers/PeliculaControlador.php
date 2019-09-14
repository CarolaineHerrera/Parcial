<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaControlador extends Controller
{
    public function index()
    {
    	$pelicula=Pelicula::find(3);
    	return $pelicula;
    }
}
