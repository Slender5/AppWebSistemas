<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class campo_laboral extends Model
{
    protected $fillable = ['vineta', 'elemento', 'slug'];
    protected $table = 'campo_laborals';
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
