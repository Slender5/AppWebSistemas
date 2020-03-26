<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuerposAcademico extends Model
{
    Protected $fillable = ['nombre', 'grado', 'idCA', 'clave', 'integrantes'];
    public function getRouteKeyName(){
        return 'slug';
    }
}
