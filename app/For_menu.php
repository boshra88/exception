<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product_menu ;
class For_menu extends Model
{
       public function product_menus()
    {
        return $this->belongsTo(Product_menu::class);
    }

}
