<?php

namespace App\Controllers;

class portadahome extends BaseController
{
	public function index()
	{
		return view('header').view('body').view('footer');
	}
}