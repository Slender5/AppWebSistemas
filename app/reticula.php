<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reticula extends Model
{
    protected $fillable = ['titulo', 'programa', 'plan', 'especialidad', 'documento', 'slug'];
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
