<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\For_menu ;
class Product_menu extends Model
{
   
     public function for_menus()
    {
    	return $this->hasMany(For_menu::class);
    }
}
