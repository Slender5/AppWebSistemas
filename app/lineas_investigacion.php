<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lineas_investigacion extends Model
{
    protected $fillable = ['programa', 'linea', 'clave', 'slug'];
	protected $table = 'lineas_investigacions';
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}
}
