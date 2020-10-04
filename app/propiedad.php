<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propiedad extends Model
{
    protected $fillable =[

        'rol','direccion','avaluo','titulo_dominio','img_casa','habitaciones','tipo'

    ];
    protected $primaryKey = 'rol';

}
