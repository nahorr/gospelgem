<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $table = 'contactus';
 
	public $fillable = ['full_name', 'phone', 'email', 'message_subject', 'message'];
}
