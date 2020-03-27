<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfil_egreso extends Model
{
    protected $fillable = ['vineta', 'elemento', 'slug'];
    protected $table = 'perfil_egresos';
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
