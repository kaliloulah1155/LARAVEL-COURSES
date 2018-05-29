<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	protected $fillable=['title','description'];
    protected $guarded=[];
    
 /**
 * Get the route key for the model.
 *
 * @return string
 */

    public function getRouteKeyName()
	{
    return 'slug';
	}
	protected static function boot(){
		parent::boot();

		static::creating(function($event){
			$event->slug=str_slug($event->title);
		});
	}
}
