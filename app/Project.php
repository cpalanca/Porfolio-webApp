<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // por defecto eloquent utilizara el nombre del modelo en minuscula y plural
    // osea que atacara la tabla projects por defecto a no ser que la redefinamos con $table

    //protected $table = 'projects';

    public function getRouteKeyName()
    {
        // lo sobreescribimos para generar url amigables.
        return 'url';
    }

    // rellenad los campos que van a asignarse masivamente
    protected $guarded = []; // solo tendra en cuenta esto

}
