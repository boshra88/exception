<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\For_image;

class Product_img extends Model
{
    public function for_images()
    {
    	return $this->hasMany(For_image::class);
    }
	
}
