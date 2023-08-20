<?php

namespace App\Controllers;

class Maps extends BaseController
{
    /*
	public function index(): string
    {
        return view('index');
    }
	*/
    	public function fullscreenmaps(){return view('maps/fullscreenmaps');}
    	public function googlemaps(){return view('maps/googlemaps');}
    	public function jqvmap(){return view('maps/jqvmap');}
}