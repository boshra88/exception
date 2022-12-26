<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\Product_img;
class For_image extends Model
{
    
      public function product_imgs()
    {
        return $this->belongsTo(Product_img::class);
    }


}
