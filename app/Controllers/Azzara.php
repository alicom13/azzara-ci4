<?php

namespace App\Controllers;

class Azzara extends BaseController
{
	
	public function index()
	{
		return view('index');
	}
	
	public function login()
	{
		return view('login');
	}
	
	public function login2()
	{
		return view('login2');
	}
	
	public function messages()
	{
		return view('messages');
	}
	
	public function projects()
	{
		return view('projects');
	}
	
	public function starter_template()
	{
		return view('starter_template');
	}
	
	public function userprofile()
	{
		return view('userprofile');
	}
	
	public function widgets()
	{
		return view('widgets');
	}
	
	public function error404()
	{
		return view('404');
	}
}
