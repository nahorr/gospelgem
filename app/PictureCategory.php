<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PictureCategory extends Model
{
     public function manage_pictures()
    {
        return $this->hasMany('App\ManagePicture');
    }
}
