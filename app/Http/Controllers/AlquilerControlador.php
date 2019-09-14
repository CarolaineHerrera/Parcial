<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use Illuminate\Http\Request;

class AlquilerControlador extends Controller
{
    public function index()
    {
    	$alquiler=Alquiler::all();
    	return $alquiler;
    }
}
