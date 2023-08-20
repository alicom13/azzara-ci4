<?php

namespace App\Controllers;

class Charts extends BaseController
{
    /*
	public function index(): string
    {
        return view('index');
    }
*/
	public function charts(){return view('charts/charts');}
	public function sparkline(){return view('charts/sparkline');}

}
