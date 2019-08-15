<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('approved', 'suspended')
            ->withTimestamps();
    }
}
