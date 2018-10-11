<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagePicture extends Model
{
    protected $fillable = ['picture_category_id', 'picture_name', 'picture_description','picture'];
    
       
    public function picture_category()
    {
    	return $this->belongsTo('App\PictureCategory');
    }

}
