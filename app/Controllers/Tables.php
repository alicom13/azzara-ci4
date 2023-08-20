<?php

namespace App\Controllers;

class Tables extends BaseController
{
    /*
	public function index(): string
    {
        return view('index');
    }
	*/
	public function avatars(){return view('components/avatars');}
	public function buttons(){return view('components/buttons');}
	public function flaticons(){return view('components/flaticons');}
	public function font_awesome_icons(){return view('components/font-awesome-icons');}
	public function gridsystem(){return view('components/gridsystem');}
	public function lists(){return view('components/lists');}
	public function notifications(){return view('components/notifications');}
	public function panels(){return view('components/panels');}
	public function sweetalert(){return view('components/sweetalert');}
	public function typography(){return view('components/typography');}

}
