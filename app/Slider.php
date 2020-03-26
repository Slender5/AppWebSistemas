<?php

namespace WebSistemas;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
protected $fillable = ['contenido','slug','image'];


  public function getRouteKeyName()
  {
    return 'slug';
  }
}
