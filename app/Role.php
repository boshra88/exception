<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;
class Role extends Model
{
    protected $fillable = [
        'name'
    ];

     public function users()
    {
        return $this->belongsToMany(User::class ,'role_users');
    }
          public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

      
      public function hasAccess(string $per) 
    {
        foreach ($this->permissions as $permission) {
               if($this->permissions()->where('name' ,$per)->first())
          {
            return true ;
          }
          return false;
    }
 

   
}
}
