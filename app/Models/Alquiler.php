<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    
    protected $table='alquileres';

    protected $fillable = ['pelicula_id','precio','fecha', 'todo','descripcion'];

    protected $hidden = ['created_at','updated_at'];

    protected $casts = ['todo' => 'array'];

    public function peliculas(){
    	return $this->belongsTo('App\Models\Pelicula');
    }

    public function setDescripcionAttribute($value){
    	$this->attributes['descripcion'] = ucfirst($value);
    }

    

}
