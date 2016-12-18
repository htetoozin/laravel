<?php

/*namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Widget extends Model
{
    protected $fillable = ['name', 'slug', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getCreatedAttribute($value){
    	return Carbon::parse($value)->format('m-d-Y');
    }
}*/

 
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasModelTrait;


class Widget extends SuperModel 
{	
	use HasModelTrait;
	protected $fillable = ['name', 'slug', 'user_id'];

	/**
		* Get the user that owns the widget.
	*/

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
