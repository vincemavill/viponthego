<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class packages_controller extends Controller
{
    public function index(){
    	return view('packages');
    }
}
