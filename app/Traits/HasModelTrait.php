<?php

namespace App\Traits;

use Carbon\Carbon;

trait HasModelTrait
{
	public function getCreatedAtAttribute($value)
	{
		return Carbon::parse($value)->format('m-d-Y');
	}
}