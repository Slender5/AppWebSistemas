<?php

namespace WebSistemas;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //
    protected $fillable = ['titulo','slug','newimage', 'redaccion'];


    public function getRouteKeyName()
    {
      return 'slug';
    }
}
