<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ShowsImages;

class MarketingImage extends SuperModel
{
	use ShowsImages;
	protected $fillable = ['is_active',
							'is_featured',
							'image_name',
							'image_extension'];


	public function showActiveStatus($is_active)
	{
		return $is_active == 1 ? 'Yes' : 'No';
	}
	public function showFeaturedStatus($is_featured)
	{
		return $is_featured == 1 ? 'Yes' : 'No';
	}
}
