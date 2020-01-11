<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title','url','description','category','type','brand','img'
    ];
    public function getRouteKeyName(){
        return 'url';
    }
}
