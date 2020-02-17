<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //definimos el nombre de la tabla
    protected $table = 'categories';
    //definimos la llave primaria
    protected $primaryKey = 'id';
    //campos que son llenados a traves de un formulario
    protected $fillable = ['category'];
}
