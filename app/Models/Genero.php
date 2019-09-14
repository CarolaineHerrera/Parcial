<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $primaryKey='id';

    protected $table='generos';

    protected $fillable = ['nombre','descripcion'];

    protected $hidden = ['created_at','updated_at'];

    public function peliculas(){
    	return $this->hasMany('App\Models\Pelicula');
    }
    //accesorio
    public function getNombreDescripcionAttribute()
    {
    	return "{$this->nombre}{$this->descripcion}";
    }

}
