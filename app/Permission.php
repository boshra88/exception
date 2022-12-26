<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
          public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

     public function hasPermission(string $permission) : bool
    {   
          if($this->permissions()->where('name' ,$permission)->first())
          {
          	return true ;
          }
          return false;
    }
}
