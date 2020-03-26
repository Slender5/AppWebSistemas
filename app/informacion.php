<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informacion extends Model
{

    Protected $fillable = ['descripcion'];
    protected $table = 'informacion-carrera';
    public function getRouteKeyName(){
        return 'slug';
    }
}
