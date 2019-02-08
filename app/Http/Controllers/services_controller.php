<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class services_controller extends Controller
{
    public function index(){

    	return view('services');
    }
    public function business(){

    	return view('business');
    }
    public function webgraphic(){

    	return view('webgraphic');
    }
    public function officefinder(){

    	return view('officefinder');
    }
}
