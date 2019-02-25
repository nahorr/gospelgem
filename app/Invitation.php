<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $dates = ['event_date'];

    public $fillable = ['organization_name', 'country', 'event', 'description', 'event_date', 'venue', 'contact_person', 'contact_phone', 'contact_email'];
}
