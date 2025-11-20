<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name',
        'username',
        'number',
    ];

    public function superUser()
    {
        return $this->superuser;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
