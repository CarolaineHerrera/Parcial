<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneroControlador extends Controller
{
    public function index()
    {
    	$genero=Genero::find(3);
    	return $genero;
    }
}
