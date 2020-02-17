<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //definimos el nombre de la tabla
    protected $table = 'types';
    //definimos la llave primaria
    protected $primaryKey = 'id';
    //campos que son llenados a traves de un formulario
    protected $fillable = ['type'];
}
