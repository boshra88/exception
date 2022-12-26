<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role):bool
    {
        if($this->roles()->where('name' ,$role)->first())
        {
            return true ;
        }
        return false ;
    }

       public function hasAccess(string $permission) : bool
    {
        // check if the permission is available in any role
        foreach ($this->roles as $role) {
            if($role->hasAccess($permission)) {
                return true;
            }
        }
        return false;
    }

       public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
