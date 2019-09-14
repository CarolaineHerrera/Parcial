<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $primaryKey='id';

    protected $table='peliculas';

    protected $fillable = ['nombre','genero_id','alquilado'];

    protected $casts=[
    	'alquilado'=>'boolean'
    ];

    protected $hidden = ['created_at','updated_at'];

    protected $appends=['list_alquiler','list_genero'];

    public function genero(){
    	return $this->belongsTo('App\Models\Genero','genero_id');
    }

    public function alquileres(){
    	return $this->hasMany('App\Models\Alquiler');
    }

    public function getListGeneroAttribute()
    {
    	return $this->genero;
    }

    public function getListAlquilerAttribute()
    {
    	return $this->alquileres;
    }

}
