<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function businessUnits()
    {
    	//$business_units = BusinessUnits::get();

    	return view('admin.business.units');
    }
}
